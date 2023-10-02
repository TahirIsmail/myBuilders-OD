<?php

namespace App\Http\Controllers\Payment;

use Auth;
use Session;
use Paystack;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\PackagePaymentController;
use App\Http\Controllers\ServicePaymentController;
use App\Http\Controllers\MilestonePaymentController;


class PaystackController extends Controller
{
    public function pay(Request $request)
    {
        $post_data = array();
        $post_data['payment_type'] =  Session::get('payment_data')['payment_type'];
        $post_data['payment_method'] = Session::get('payment_data')['payment_method'];

        if (Session::get('payment_data')['payment_type'] == 'package_payment') {
            $post_data['package_id'] = Session::get('payment_data')['package_id'];
        }
        elseif (Session::get('payment_data')['payment_type'] == 'milestone_payment') {
            $post_data['milestone_request_id'] = Session::get('payment_data')['milestone_request_id'];
        }
        elseif (Session::get('payment_data')['payment_type'] == 'service_payment') {
            $post_data['service_package_id'] = Session::get('payment_data')['service_package_id'];
        }
        
        $array = ['custom_fields' => $post_data];

        $user = Auth::user();
        $request->email = $user->email;
        $request->amount = round(Session::get('payment_data')['amount'] * 100);
        $request->currency = env('PAYSTACK_CURRENCY_CODE', 'NGN');
        $request->metadata = json_encode($array);
        $request->reference = Paystack::genTranxRef();
        return Paystack::getAuthorizationUrl()->redirectNow();
    }


    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
        $payment = Paystack::getPaymentData();

        if ($payment['data']['metadata'] && $payment['data']['metadata']['custom_fields']) {
            $payment_type = $payment['data']['metadata']['custom_fields']['payment_type'];
            if (!empty($payment['data']) && $payment['data']['status'] == 'success') {
                if ($payment_type == 'package_payment') {
                    $payment_data['amount'] = $payment['data']['amount']/100;
                    $payment_data['payment_method'] = $payment['data']['metadata']['custom_fields']['payment_method'];
                    $payment_data['payment_type'] = $payment_type;
                    $payment_data['package_id'] = $payment['data']['metadata']['custom_fields']['package_id'];
                    return (new PackagePaymentController)->package_payment_done($payment_data, json_encode($payment));
                }
                elseif ($payment_type == 'milestone_payment') {
                    $payment_data['amount'] = $payment['data']['amount']/100;
                    $payment_data['payment_method'] = $payment['data']['metadata']['custom_fields']['payment_method'];
                    $payment_data['payment_type'] = $payment_type;
                    $payment_data['milestone_request_id'] = $payment['data']['metadata']['custom_fields']['milestone_request_id'];
                    return (new MilestonePaymentController)->milestone_payment_done($payment_data, $payment);
                }
                elseif ($payment_type == 'service_payment') {
                    $payment_data['amount'] = $payment['data']['amount']/100;
                    $payment_data['payment_method'] = $payment['data']['metadata']['custom_fields']['payment_method'];
                    $payment_data['payment_type'] = $payment_type;
                    $payment_data['service_package_id'] = $payment['data']['metadata']['custom_fields']['service_package_id'];
                    return (new ServicePaymentController)->service_package_payment_done($payment_data, $payment);
                }
                elseif ($payment_type == 'wallet_payment') {
                    $payment_data['amount'] = $payment['data']['amount']/100;
                    $payment_data['payment_method'] = $payment['data']['metadata']['custom_fields']['payment_method'];
                    return (new WalletController)->wallet_payment_done($payment_data, json_encode($payment));
                }
            }
            else{
                Session::forget('payment_data');
                flash(translate('Payment cancelled'))->success();
                return redirect()->route('home');
            }
        }
    }
}
