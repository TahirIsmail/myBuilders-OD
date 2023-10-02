<?php

namespace App\Http\Controllers\Payment;
use Auth;
use Session;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SSLCommerz;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\PackagePaymentController;
use App\Http\Controllers\ServicePaymentController;
use App\Http\Controllers\MilestonePaymentController;

session_start();

class SslcommerzController extends Controller
{
    public function pay(Request $request)
    {
        # Here you have to receive all the order data to initate the payment.
        # Lets your oder trnsaction informations are saving in a table called "orders"
        # In orders table order uniq identity is "order_id","order_status" field contain status of the transaction, "grand_total" is the order amount to be paid and "currency" is for storing Site Currency which will be checked with paid currency.
        $user = Auth::user();
        $total_amount = Session::get('payment_data')['amount'];
        $post_data = array();
        $post_data['total_amount'] =  $total_amount;
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = substr(md5($user->id), 0, 10); // tran_id must be unique

        $post_data['value_a'] = $user->id;
        $post_data['value_b'] = Session::get('payment_data')['payment_type'];
        $post_data['value_c'] = $total_amount;
        
        if(Session::get('payment_data')['payment_type'] == 'package_payment'){
            $post_data['value_d'] = Session::get('payment_data')['package_id'];
        }
        elseif (Session::get('payment_data')['payment_type'] == 'milestone_payment') {
            $post_data['value_d'] = Session::get('payment_data')['milestone_request_id'];
        }
        elseif (Session::get('payment_data')['payment_type'] == 'service_payment') {
            $post_data['value_d'] = Session::get('payment_data')['service_package_id'];
        }

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = $user->name;
        $post_data['cus_add1'] = $user->address->street;
        $post_data['cus_city'] = $user->address->city != null ? $user->address->city->name : "";
        $post_data['cus_postcode'] = $user->address->postal_code;
        $post_data['cus_country'] = $user->address->country != null ? $user->address->country->name : "";
        $post_data['cus_phone'] = $user->address->phone ;

        $server_name=$request->root()."/";
        $post_data['success_url'] = $server_name . "sslcommerz/success";
        $post_data['fail_url'] = $server_name . "sslcommerz/fail";
        $post_data['cancel_url'] = $server_name . "sslcommerz/cancel";


        $sslc = new SSLCommerz();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->initiate($post_data, false);

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }

    }

    public function success(Request $request)
    {
        #End to received these value from session. which was saved in index function.
        $payment = json_encode($request->all());

        if(isset($request->value_b)){
            if($request->value_b == 'package_payment'){
                $data['amount'] = $request->value_c;
                $data['payment_method'] = 'sslcommerz';
                $data['package_id'] = $request->value_d;
                $data['payment_type'] = 'package_payment';
                
                Auth::login(User::find($request->value_a));
                return (new PackagePaymentController)->package_payment_done($data, $payment);
            }
            elseif ($request->value_b == 'milestone_payment') {
                $data['amount'] = $request->value_c;
                $data['payment_method'] = 'sslcommerz';
                $data['milestone_request_id'] = $request->value_d;
                
                Auth::login(User::find($request->value_a));
                return (new MilestonePaymentController)->milestone_payment_done($data, $payment);
            }
            elseif ($request->value_b == 'service_payment') {
                $data['amount'] = $request->value_c;
                $data['payment_method'] = 'sslcommerz';
                $data['service_package_id'] = $request->value_d;
                
                Auth::login(User::find($request->value_a));
                return (new ServicePaymentController)->service_package_payment_done($data, $payment);
            }
            elseif ($request->value_b == 'wallet_payment') {
                $data['amount'] = $request->value_c;
                $data['payment_method'] = 'sslcommerz';
                Auth::login(User::find($request->value_a));
                return (new WalletController)->wallet_payment_done($data, $payment);
            }
        }
    }

    public function fail(Request $request)
    {
        $request->session()->forget('payment_data');
        flash(translate('Payment Failed'))->success();
        return redirect()->url()->previous();
    }

     public function cancel(Request $request)
    {
        $request->session()->forget('payment_data');
        flash(translate('Payment cancelled'))->success();
    	return redirect()->url()->previous();
    }

     public function ipn(Request $request)
    {
        #Received all the payement information from the gateway
      if($request->input('tran_id')) #Check transation id is posted or not.
      {

          $tran_id = $request->input('tran_id');

        #Check order status in order tabel against the transaction id or order id.
          $order = Order::findOrFail($request->session()->get('order_id'));

                if($order->payment_status =='Pending')
                {
                    $sslc = new SSLCommerz();
                    $validation = $sslc->orderValidate($tran_id, $order->grand_total, 'BDT', $request->all());
                    if($validation == TRUE)
                    {
                        /*
                        That means IPN worked. Here you need to update order status
                        in order table as Processing or Complete.
                        Here you can also sent sms or email for successfull transaction to customer
                        */
                        echo "Transaction is successfully Complete";
                    }
                    else
                    {
                        /*
                        That means IPN worked, but Transation validation failed.
                        Here you need to update order status as Failed in order table.
                        */

                        echo "validation Fail";
                    }

                }
        }
        else
        {
            echo "Inavalid Data";
        }
    }
}
