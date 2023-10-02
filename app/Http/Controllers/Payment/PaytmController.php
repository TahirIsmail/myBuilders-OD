<?php

namespace App\Http\Controllers\Payment;

use Auth;
use Session;
use PaytmWallet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\PackagePaymentController;
use App\Http\Controllers\ServicePaymentController;
use App\Http\Controllers\MilestonePaymentController;

class PaytmController extends Controller
{
    public function pay(){
        $payment = PaytmWallet::with('receive');
        $payment->prepare([
          'order' => rand(100000, 999999),
          'user' => Auth::user()->id,
          'mobile_number' => "+919007798519",
          'email' => Auth::user()->email,
          'amount' => Session::get('payment_data')['amount'],
          'callback_url' => route('paytm.callback')
        ]);
        return $payment->receive();
    }

    public function callback(Request $request){
        $transaction = PaytmWallet::with('receive');
        $response = $transaction->response(); // To get raw response as array
        //Check out response parameters sent by paytm here -> http://paywithpaytm.com/developer/paytm_api_doc?target=interpreting-response-sent-by-paytm
        if($transaction->isSuccessful()){
            if($request->session()->get('payment_data')['payment_type'] == 'milestone_payment'){
                $milestone_payment = new MilestonePaymentController;
                return $milestone_payment->milestone_payment_done($request->session()->get('payment_data'),  json_encode($response));
            }
            elseif ($request->session()->get('payment_data')['payment_type'] == 'package_payment') {
                $package_payment = new PackagePaymentController;
                return $package_payment->package_payment_done($request->session()->get('payment_data'), $response);
            }
            elseif ($request->session()->get('payment_data')['payment_type'] == 'service_payment') {
                $service_payment = new ServicePaymentController;
                return $service_payment->service_package_payment_done($request->session()->get('payment_data'), $response);
            }
            elseif ($request->session()->get('payment_data')['payment_type'] == 'wallet_payment') {
                $wallet_payment = new WalletController;
                return $wallet_payment->wallet_payment_done($request->session()->get('payment_data'), json_encode($response));
            }
        }else if($transaction->isFailed()){
            $request->session()->forget('payment_data');
            flash(translate('Payment cancelled'))->error();
        	return back();
        }else if($transaction->isOpen()){
          //Transaction Open/Processing
        }
        $transaction->getResponseMessage(); //Get Response Message If Available
        //get important parameters via public methods
        $transaction->getOrderId(); // Get order id
        $transaction->getTransactionId(); // Get transaction id
    }
}
