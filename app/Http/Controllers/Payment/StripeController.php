<?php

namespace App\Http\Controllers\Payment;

use Stripe;
use Session;
use App\Models\Currency;
use Illuminate\Http\Request;
use App\Models\SystemConfiguration;
use App\Http\Controllers\Controller;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\PackagePaymentController;
use App\Http\Controllers\ServicePaymentController;
use App\Http\Controllers\MilestonePaymentController;

class StripeController extends Controller
{
    /**
     * Stripe initialize method.
     *
     * @return \Illuminate\Http\Response
     */
    public function pay()
    {
        // dd(Session::get('payment_data'));
        return view('frontend.default.stripe.stripe');
    }

    public function create_checkout_session(Request $request) {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [
                [
                    'price_data' => [
                    'currency' => Currency::findOrFail(SystemConfiguration::where('type', 'system_default_currency')->first()->value)->code,
                    'product_data' => [
                        'name' => "Payment"
                    ],
                    'unit_amount' => round($request->session()->get('payment_data')['amount'] * 100),
                    ],
                    'quantity' => 1,
                    ]
                ],
            'mode' => 'payment',
            'success_url' => route('stripe.success'),
            'cancel_url' => route('stripe.cancel'),
        ]);

        return response()->json(['id' => $session->id, 'status' => 200]);
    }

    public function success(Request $request) {
        try{
            $payment = ["status" => "Success"];

            if (Session::get('payment_data')['payment_type'] == 'milestone_payment') {
                $milestone_payment = new MilestonePaymentController;
                return $milestone_payment->milestone_payment_done(Session::get('payment_data'), json_encode($payment));
            } 
            elseif (Session::get('payment_data')['payment_type'] == 'package_payment') {
                $package_payment = new PackagePaymentController;
                return $package_payment->package_payment_done(Session::get('payment_data'), json_encode($payment));
            }
            elseif (Session::get('payment_data')['payment_type'] == 'service_payment') {
                $package_payment = new ServicePaymentController;
                return $package_payment->service_package_payment_done(Session::get('payment_data'), json_encode($payment));
            }
            elseif (Session::get('payment_data')['payment_type'] == 'wallet_payment') {
                return (new WalletController)->wallet_payment_done(Session::get('payment_data'), json_encode($payment));
            }

        }
        catch (\Exception $e) {
            flash($e->getMessage())->error();
            return redirect()->route('dashboard');
        }
    }

    public function cancel(Request $request){
        flash(translate('Payment is cancelled'))->error();
        return redirect()->route('dashboard');
    }
}
