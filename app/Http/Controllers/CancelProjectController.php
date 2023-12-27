<?php

namespace App\Http\Controllers;

use App\Utility\EmailUtility;
use App\Utility\NotificationUtility;
use Illuminate\Http\Request;
use App\Models\CancelProject;
use App\Models\MilestonePayment;
use App\Models\Project;
use App\Models\Wallet; 
use Auth;

class CancelProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:show project cancel requests'])->only('index');
    }
    //Admin can see Cancel Requests List
    public function index(Request $request)
    {
        $client_id = null;
        if ($request->search != null || $request->type != null) {
            if ($request->has('user_id') && $request->user_id != null) {
                $products = CancelProject::where('requested_user_id', $request->user_id);
                $client_id = $request->user_id;
            }
            $cancel_projects = CancelProject::orderBy('created_at', 'desc')->paginate(10);
        }
        else {
            $cancel_projects = CancelProject::orderBy('created_at', 'desc')->paginate(10);
        }
        return view('admin.default.project.project_cancel_request.request_lists', compact('cancel_projects', 'client_id'));
    }

    //Send Cancel Request by user
    public function store(Request $request)
    {
        $cancel_project = new CancelProject;
        $cancel_project->requested_user_id = Auth::user()->id;
        $cancel_project->project_id = $request->project_id;
        $cancel_project->reason = $request->reason;
        $cancel_project->viewed = 0;
        if ($cancel_project->save()) {

            //to admin
            NotificationUtility::set_notification(
                "project_cancel_request_by_client",
                translate('A Project cancellation is requested by'),
                route('cancel-project-request.index',[],false),
                0,
                Auth::user()->id,
                'admin'
            );
            EmailUtility::send_email(
                "A Project cancellation is  requested",
                translate('A Project cancellation is requested by'). Auth::user()->name,
                system_email(),
                route('cancel-project-request.index')
            );

            flash(translate('Request has been created successfully'))->success();
            return redirect()->route('dashboard');
        }
        else {
            flash(translate('Sorry! Something went wrong.'))->error();
            return back();
        }
    }

    public function show(Request $request)
    {
        $cancel_project = CancelProject::findOrFail($request->id);
        $cancel_project->viewed = 1;
        $cancel_project->save();
        return view('admin.default.project.project_cancel_request.request_details_modal', compact('cancel_project'));
    }

    //Cancel Request accepted by admin
    public function request_accepted(Request $request)
    { 
        $project = Project::findOrFail($request->project_id);
        $project->cancel_status = 1;
        $project->cancel_by_user_id = $request->cancel_by_user_id;
        if ($project->save()) {

            $milestone_payments = MilestonePayment::where('project_id', $project->id)->where('paid_status',1)->get();
            $total_amount = 0;
            $freelancer_profit = 0;
            foreach ($milestone_payments as $key =>$milestone_payment) {
                $total_amount += $milestone_payment->amount;
                $freelancer_profit += $milestone_payment->freelancer_profit;
            }
            if( $milestone_payments != null &&  $total_amount > 0){
                $deduct_freelancer_amount  = ($freelancer_profit * $request->refund_percentage) /100;
                $refund_to_client_amount   = ($total_amount * $request->refund_percentage) /100;

                $freelancer_profile          = $project->project_user->user->profile;
                $freelancer_profile->balance = $freelancer_profile->balance - $deduct_freelancer_amount;
                $freelancer_profile->save();

                $client_profile          = $project->client->profile;
                $client_profile->balance = $client_profile->balance + $refund_to_client_amount;
                $client_profile->save();

                $cancel_project = CancelProject::where('id', $request->cancel_project_id)->first();
                $cancel_project->refund_percentage = $request->refund_percentage;
                $cancel_project->save();

                $wallet = new Wallet;
                $wallet->user_id = $project->client_user_id;
                $wallet->amount = $refund_to_client_amount;
                $wallet->payment_method = "";
                $wallet->payment_details = "";
                $wallet->type = "Project Cancellation Refund";
                $wallet->save();
            }


            //admin to freelancer
            NotificationUtility::set_notification(
                "project_cancel_request_approved_by_admin",
                translate('A Project cancellation is approved by'),
                route('projects.my_cancelled_project',[],false),
                $project->project_user->user_id,
                Auth::user()->id,
                'freelancer'
            );
            EmailUtility::send_email(
                translate('A Project cancellation is approved'),
                translate('A Project cancellation is approved by'). Auth::user()->name,
                get_email_by_user_id($project->project_user->user_id),
                route('projects.my_cancelled_project')
            );

            //admin to client
            NotificationUtility::set_notification(
                "project_cancel_request_approved_by_admin",
                translate('A Project cancellation is approved by'),
                route('projects.my_cancelled_project',[],false),
                $project->client_user_id,
                Auth::user()->id,
                'client'
            );
            EmailUtility::send_email(
                translate('A Project cancellation is approved'),
                translate('A Project cancellation is approved by'). Auth::user()->name,
                get_email_by_user_id($project->client_user_id),
                route('projects.my_cancelled_project')
            );

            flash(translate('Request has been accepted successfully'))->success();
            return redirect()->route('cancel-project-request.index');
        }
        else {
            flash(translate('Sorry! Something went wrong.'))->error();
            return back();
        } 
    }

    public function destroy($id)
    { 
        CancelProject::destroy($id);
        flash(translate('Project Cancel Request has been deleted successfully'))->success();
        return redirect()->route('cancel-project-request.index');
    }
}
