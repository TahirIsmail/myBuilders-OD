<?php

namespace App\Http\Controllers\Payment;

use Auth;
use Session;
use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\WalletController;
use KingFlamez\Rave\Facades\Rave as Flutterwave;
use App\Http\Controllers\PackagePaymentController;
use App\Http\Controllers\ServicePaymentController;
use App\Http\Controllers\MilestonePaymentController;

class FlutterwaveController extends Controller
{
    public function pay()
    {
        $amount = Session::get('payment_data')['amount'];
        //This generates a payment reference
        $reference = Flutterwave::generateReference();

        // Enter the details of the payment
        $data = [
            'payment_options' => 'card,banktransfer',
            'amount' => $amount,
            'email' => Auth::user()->email,
            'tx_ref' => $reference,
            'currency' => env('FLW_PAYMENT_CURRENCY_CODE', 'NGN'),
            'redirect_url' => route('flutterwave.callback'),
            'customer' => [
                'email' => Auth::user()->email,
                "phone_number" => null,
                "name" => Auth::user()->name
            ],
            "customizations" => [
                "title" => 'Payment',
                "description" => ""
            ]
        ];

        $payment = Flutterwave::initializePayment($data);
        
        if ($payment['status'] !== 'success') {
            flash($payment['message'])->error();
            return back();
        }

        return redirect($payment['data']['link']);
    }

    public function callback(){
        $status = request()->status;

        //if payment is successful
        if ($status ==  'successful') {
            $transactionID = Flutterwave::getTransactionIDFromCallback();
            $data = Flutterwave::verifyTransaction($transactionID);

            try{
                $payment = $data['data'];

                if($payment['status'] == "successful"){
                    if(Session::get('payment_data')['payment_type'] == 'package_payment'){
                        return (new PackagePaymentController)->package_payment_done(Session::get('payment_data'), json_encode($payment));
                    }
                    elseif(Session::get('payment_data')['payment_type'] == 'milestone_payment'){
                        return (new MilestonePaymentController)->milestone_payment_done(Session::get('payment_data'), $payment);
                    }
                    elseif(Session::get('payment_data')['payment_type'] == 'service_payment'){
                        return (new ServicePaymentController)->service_package_payment_done(Session::get('payment_data'), $payment);
                    }
                    elseif(Session::get('payment_data')['payment_type'] == 'wallet_payment'){
                        return (new WalletController)->wallet_payment_done(Session::get('payment_data'), json_encode($payment));
                    }
                }
            }
            catch(Exception $e){
                dd($e);
            }
        }
        elseif ($status ==  'cancelled'){
            //Put desired action/code after transaction has been cancelled here
            flash(translate('Payment cancelled'))->error();
            return redirect()->route('home');
        }
        //Put desired action/code after transaction has failed here
        flash(translate('Payment failed'))->error();
        return redirect()->route('home');
    }
}
