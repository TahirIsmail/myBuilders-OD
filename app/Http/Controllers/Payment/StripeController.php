<?php

namespace App\Http\Controllers\Payment;

use Stripe;
use Stripe\StripeClient;
use Session;
use Stripe\Customer;
use Stripe\PaymentMethod;
use DB;
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

    public function store_user_card(Request $request){
        // Validate the incoming request data
    $validatedData = $request->validate([
        'card_number' => 'required|string',
        'card_exp_month' => 'required|integer',
        'card_exp_year' => 'required|integer',
        'card_cvc' => 'required|string',
        'card_holder_name' => 'required|string',
        'card_holder_address' => 'required|string',
    ]);

    
$stripe = new StripeClient(env('STRIPE_SECRET'));

try {
    // Create a customer in Stripe
    $customer = $stripe->customers->create([
        'email' => $request->input('card_holder_email'), // Assuming you have the customer's email
        'name' => $request->input('card_holder_name'),
        'address' => [
            'line1' => $request->input('card_holder_address'),
        ],
    ]);
} catch (\Stripe\Exception\ApiErrorException $e) {
    // Handle customer creation error
    dd($e);
    return response()->json(['error' => $e->getMessage()], 422);
}

try {
    // Create a payment method in Stripe
    $paymentMethod = $stripe->paymentMethods->create([
        'type' => 'card',
        'card' => [
            'number' => $request->input('card_number'),
            'exp_month' => $request->input('card_exp_month'),
            'exp_year' => $request->input('card_exp_year'),
            'cvc' => $request->input('card_cvc'),
        ],
    ]);
} catch (\Stripe\Exception\ApiErrorException $e) {
    // Handle payment method creation error
    return response()->json(['error' => $e->getMessage()], 422);
}

   

    // Store the customer ID and payment method details in your database
    DB::table('customer_payment_methods')->insert([
        'user_id' => auth()->id(), // Assuming you are using authentication
        'stripe_customer_id' => $customer->id,
        'stripe_payment_method_id' => $paymentMethod->id,
        'card_holder_name' => $validatedData['card_holder_name'],
        'cvv' => $validatedData['card_cvc'],
        'last_four' => substr($validatedData['card_number'], -4),
        'brand' => $paymentMethod->card->brand,
        'exp_month' => $paymentMethod->card->exp_month,
        'exp_year' => $paymentMethod->card->exp_year,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    // Optionally, you can save the customer ID in your user model
  

    return response()->json(['message' => 'Customer created successfully'], 201);

    }
}
