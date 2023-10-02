<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServicePackage;
use App\Models\ServicePackagePayment;
use App\Models\Wallet;
use App\Utility\ServicesUtility;
use App\Utility\ValidationUtility;
use Illuminate\Http\Request;
use App\Utility\EmailUtility;
use App\Utility\NotificationUtility;
use Auth;
use Validator;
use Session;

class ServiceController extends Controller
{
    protected $rules;
    protected $messages;

    public function __construct()
    {
        $this->middleware(['permission:show all services'])->only('admin_all_services');
        $this->middleware(['permission:show cancelled services'])->only('all_cancelled_services');
        $this->middleware(['permission:show service cancel requests'])->only('admin_requested_services_for_cancellation');
        $this->rules = ValidationUtility::get_service_validation_rules();
        $this->messages = ValidationUtility::get_service_validation_message();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.default.user.freelancer.projects.services.index');
    }

    public function freelancer_index()
    {
        $services = Auth::user()->services()->paginate(12);
        return view('frontend.default.user.freelancer.projects.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(ServicesUtility::can_create_service() == 1)
            return view('frontend.default.user.freelancer.projects.services.create');

        flash(translate('Sorry! Your service creation limit is over.'))->warning();

        return redirect()->route('service.freelancer_index');
    }

    public function validate_service($request)
    {
        $rules = $this->rules;
        $messages = $this->messages;
        $validator = Validator::make($request->all(), $rules, $messages);
        // dd($validator);
        if ($validator->fails()) {
            return 0;
        }

        return 1;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(ServicesUtility::can_create_service() != 1) {
            flash(translate('Sorry! Your service creation limit is over.'))->warning();
            return redirect()->route('service.freelancer_index');
        }

        if(!$this->validate_service($request)) {
            flash(translate('Sorry! Your validation was not successful.'))->error();
            return redirect(route('service.create'));
        }

        $service_created = ServicesUtility::create_service($request);

        if($service_created == 1) {
            flash(translate('Service saved successfully'))->success();
            return redirect(route('service.freelancer_index'));
        }

        flash(translate('Service was not saved successfully. Please try again.'))->error();
        return redirect()->route('service.freelancer_index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $service = Service::where('slug', $slug)->first();
        if($service != null){
            $service_packages = $service->service_packages;

            return view('frontend.default.services-single', compact('service', 'service_packages'));
        }

        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $service = Service::where('slug', $slug)->first();
        $service_packages = $service->service_packages;

        return view('frontend.default.user.freelancer.projects.services.edit', compact('service', 'service_packages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        if(!$this->validate_service($request)) {
            flash(translate('Sorry! Your validation was not successful.'))->error();
            return redirect(route('service.edit', $slug));
        }

        $service_updated = ServicesUtility::update_service($request, $slug);

        if($service_updated == 1) {
            flash(translate('Service updated successfully'))->success();
            return redirect(route('service.freelancer_index'));
        }

        flash(translate('Service was not updated successfully. Please try again.'))->error();
        return redirect()->route('service.edit', $slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $service = Service::where('slug', $slug)->first();
        $service_packages = $service->service_packages;

        $deleted_success = ServicesUtility::delete_service($slug);

        if($deleted_success == 1) {
            flash(translate('Service successfully deleted.'))->success();
        } else {
            flash(translate('Service was not successfully deleted.'))->error();
        }

        return redirect()->route('service.freelancer_index');
    }

    public function get_service_package_purchase_modal(Request $request)
    {
        $service_package = ServicePackage::findOrFail($request->id);
        return view('service_purchase_modal', compact('service_package'));
    }

    public function purchase_service_package(Request $request)
    {
        $service_package = ServicePackage::findOrFail($request->service_package_id);
        $data['service_package_id'] = $service_package->id;
        $data['payment_method'] = $request->payment_option;
        $data['amount'] = $service_package->service_price;
        $data['user_id'] = Auth::user()->id;
        $data['payment_type'] = 'service_payment';
        $request->session()->put('payment_data', $data);

        if ($request->payment_option == 'wallet') {
            $user_profile = Auth::user()->profile;
            if ($user_profile->balance >= $service_package->service_price) {
                $user_profile->balance -= $service_package->service_price;
                $user_profile->save();
                return (new ServicePaymentController)->service_package_payment_done(Session::get('payment_data'), null);
            }
            
            flash(translate('You do not have enough wallet balance.'))->error();
            return back(); 
        }else{
            $decorator = __NAMESPACE__ . '\\Payment\\' . str_replace(' ', '', ucwords(str_replace('_', ' ', $request->payment_option))) . "Controller";
            if (class_exists($decorator)) {
                return (new $decorator)->pay($request);
            }

            flash(translate('Something went wrong.'))->error();
            return back();
        }
    }

    public function sold_services()
    {
        $this->middleware('freelancer');
        $purchasedServices = ServicePackagePayment::where('service_owner_id', Auth::user()->id)->latest()->paginate(12);
        return view('frontend.default.user.freelancer.projects.services.purchased', compact('purchasedServices'));
    }

    public function client_purchased_services()
    {
        $this->middleware('client');
        $purchasedServices = ServicePackagePayment::where('user_id', Auth::user()->id)->latest()->paginate(12);
        return view('frontend.default.user.client.services.purchased', compact('purchasedServices'));
    }

    public function admin_all_services()
    {
        $this->middleware('admin');
        $services = Service::latest()->paginate(12);
        return view('admin.default.services.index', compact('services'));
    }

    public function cancel_service($id)
    {
        $purchased_service = ServicePackagePayment::findOrFail($id);
        return view('frontend.default.user.client.services.service_cancel_request', compact('purchased_service'));
    }

    public function cancel_service_store(Request $request)
    {
        $purchased_service = ServicePackagePayment::findOrFail($request->purchased_service_id);

        $purchased_service->cancel_requested = 1;
        $purchased_service->cancel_reason = $request->cancel_reason;
        $purchased_service->save();

        flash(translate('Your request was sent to the admin.'))->success();
        return redirect()->route('client.purchased.services');
    }

    public function client_cancel_requested_services()
    {
        $this->middleware('client');
        $purchasedServices = ServicePackagePayment::where('user_id', Auth::user()->id)->where('cancel_requested', 1)->latest()->paginate(12);
        return view('frontend.default.user.client.services.cancel_requested', compact('purchasedServices'));
    }

    public function admin_requested_services_for_cancellation()
    {
        $service_payments = ServicePackagePayment::orderBy('id', 'desc')->where('cancel_requested', 1)->where('cancel_status', 0)->paginate(12);
        return view('admin.default.service_payment_history.cancel_requested', compact('service_payments'));
    }

    public function cancel_service_request_show(Request $request)
    {
        $requested_cancel_service = ServicePackagePayment::findOrFail($request->id);
        return view('admin.default.service_payment_history.cancel_requested_show_modal', compact('requested_cancel_service'));
    }

    public function cancel_service_request_accepted(Request $request)
    {

        $requested_cancel_service = ServicePackagePayment::findOrFail($request->service_payment_id);
        $requested_cancel_service->cancel_status = 1;
        if ($requested_cancel_service->save()) {

            $deduct_freelancer_amount  = ($requested_cancel_service->freelancer_profit * $request->refund_percentage) /100;
            $refund_to_client_amount   = ($requested_cancel_service->amount * $request->refund_percentage) /100;

            $freelancer_profile          = $requested_cancel_service->freelancer->profile;
            $freelancer_profile->balance = $freelancer_profile->balance - $deduct_freelancer_amount;
            $freelancer_profile->save();

            $client_profile          = $requested_cancel_service->user->profile;
            $client_profile->balance = $client_profile->balance + $refund_to_client_amount;
            $client_profile->save();

            $requested_cancel_service->refund_percentage = $request->refund_percentage;
            $requested_cancel_service->save();

            $wallet = new Wallet;
            $wallet->user_id = $requested_cancel_service->user_id;
            $wallet->amount = $refund_to_client_amount;
            $wallet->payment_method = "";
            $wallet->payment_details = "";
            $wallet->type = "Service Cancellation Refund";
            $wallet->save();

            //admin to freelancer
            NotificationUtility::set_notification(
                "service_cancel_request_approved_by_admin",
                translate('A Service cancellation is approved by '),
                route('service.sold',[],false),
                $requested_cancel_service->service_owner_id,
                Auth::user()->id,
                'freelancer'
            );
            EmailUtility::send_email(
                translate('A Project cancellation is approved'),
                translate('A Project cancellation is approved by '). Auth::user()->name,
                get_email_by_user_id($requested_cancel_service->service_owner_id),
                route('projects.my_cancelled_project')
            );

            //admin to Client
            NotificationUtility::set_notification(
                "service_cancel_request_approved_by_admin",
                translate('A Service cancellation is approved by '),
                route('service.sold',[],false),
                $requested_cancel_service->user_id,
                Auth::user()->id,
                'client'
            );
            EmailUtility::send_email(
                translate('A Project cancellation is approved'),
                translate('A Project cancellation is approved by '). Auth::user()->name,
                get_email_by_user_id($requested_cancel_service->user_id),
                route('projects.my_cancelled_project')
            );

            flash(translate('Request has been accepted successfully'))->success();
            return redirect()->route('service_cancellation.requests');
        }
        else {
            flash(translate('Sorry! Something went wrong.'))->error();
            return back();
        }

    }

    public function admin_cancel_service($id)
    {
        $requested_service = ServicePackagePayment::findOrFail($id);

        $requested_service->cancel_status = 1;
        $requested_service->cancel_requested = 0;

        $requested_service->save();

        flash(translate('The requested Service was approved for cancellation.'))->success();
        return back();
    }


    public function all_cancelled_services()
    {
        $this->middleware('admin');
        $service_payments = ServicePackagePayment::orderBy('id', 'desc')->where('cancel_status', 1)->paginate(12);
        return view('admin.default.service_payment_history.cancelled_services', compact('service_payments'));
    }

    public function client_cancelled_services()
    {
        $this->middleware('client');
        $purchasedServices = ServicePackagePayment::where('user_id', Auth::user()->id)->where('cancel_status', 1)->latest()->paginate(12);
        return view('frontend.default.user.client.services.cancelled', compact('purchasedServices'));
    }

}
