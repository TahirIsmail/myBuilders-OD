<?php

namespace App\Http\Controllers\Payment;

use Auth;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\PackagePaymentController;
use App\Http\Controllers\ServicePaymentController;
use App\Http\Controllers\MilestonePaymentController;

class MercadopagoController extends Controller
{
    public function pay()
    {
        if(config('mercadopago.access') == ''){
            flash(translate('Mercadopago Access key is not given!'))->error();
            return redirect()->back();
        }
        $combined_order_id = rand(10000,99999);
        $phone = '123456789';
        $amount = Session::get('payment_data')['amount'];
        $name = Auth::user()->name;
        $email = Auth::user()->email;
        $success_url = url('/mercadopago/payment/done');
        $fail_url= url('/mercadopago/payment/cancel');

        if(Session::get('payment_data')['payment_type'] == 'package_payment'){
            $billname = 'Package Payment';
        }
        elseif(Session::get('payment_data')['payment_type'] == 'milestone_payment'){
            $billname = 'Milestone Payment';
        }
        elseif(Session::get('payment_data')['payment_type'] == 'service_payment'){
            $billname = 'Service Payment';
        }
        elseif(Session::get('payment_data')['payment_type'] == 'wallet_payment'){
            $billname = 'Wallet Payment';
        }
        return view('frontend.default.partials.mercadopago', compact('combined_order_id', 'billname', 'phone', 'amount', 'name', 'email', 'success_url', 'fail_url'));
    }



    public function paymentstatus()
    {
        $response = request()->all(['collection_id','collection_status','payment_id','status','preference_id']);
        if($response['status'] == 'approved'){
            if(Session::get('payment_data')['payment_type'] == 'package_payment'){
                return (new PackagePaymentController)->package_payment_done(Session::get('payment_data'), json_encode($response));
            }
            elseif(Session::get('payment_data')['payment_type'] == 'milestone_payment'){
                return (new MilestonePaymentController)->milestone_payment_done(Session::get('payment_data'), $response);
            }
            elseif(Session::get('payment_data')['payment_type'] == 'service_payment'){
                return (new ServicePaymentController)->service_package_payment_done(Session::get('payment_data'), $response);
            }
            elseif(Session::get('payment_data')['payment_type'] == 'wallet_payment'){
                return (new WalletController)->wallet_payment_done(Session::get('payment_data'), json_encode($response));
            }
        } else{
            Session::forget('payment_data');
            flash(translate('Payment cancelled'))->success();
            return redirect()->route('dashboard');  
        }
    
    }

    public function callback()
    {

       $response= request()->all(['collection_id','collection_status','payment_id','status','preference_id']);
       //Log::info($response);
       flash(translate('Payment is cancelled'))->error();
       return redirect()->route('dashboard');
    }
}
