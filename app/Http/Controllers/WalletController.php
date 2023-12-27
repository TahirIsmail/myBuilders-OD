<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wallet;
use App\Models\User;
use Auth;
use session;

class WalletController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:show wallet history'])->only('admin_index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wallets = Wallet::where('user_id', Auth::user()->id)->latest()->paginate(10);
        return view('frontend.default.user.wallet.index', compact('wallets'));
    }

    public function admin_index()
    {
        $wallets = Wallet::latest()->paginate(10);
        return view('admin.default.wallet_recharge_history.index', compact('wallets'));
    }
    

    public function rechage(Request $request)
    {
        $data['amount'] = round($request->amount);
        $data['payment_method'] = $request->payment_option;
        $data['payment_type'] = 'wallet_payment';

        $request->session()->put('payment_data', $data);
        
        if($request->payment_option != null){
            $decorator = __NAMESPACE__ . '\\Payment\\' . str_replace(' ', '', ucwords(str_replace('_', ' ', $request->payment_option))) . "Controller";
            if (class_exists($decorator)) {
                return (new $decorator)->pay($request);
            }
        }

        flash(translate('Something went wrong.'))->error();
        return back();
    }

    public function wallet_payment_done($payment_data, $payment_details)
    {
        $user = Auth::user();
        $user_profile = $user->profile;
        $user_profile->balance = $user_profile->balance + $payment_data['amount'];
        $user_profile->save();

        $wallet = new Wallet;
        $wallet->user_id = $user->id;
        $wallet->amount = $payment_data['amount'];
        $wallet->payment_method = $payment_data['payment_method'];
        $wallet->payment_details = $payment_details;
        $wallet->type = "Recharge";
        $wallet->save();

        Session::forget('payment_data');
        Session::forget('payment_type');

        flash(translate('Payment completed'))->success();
        return redirect()->route('wallet.index');
    }

    public function wallet_payment_by_admin(Request $request)
    {
        $data['amount'] = (float) $request->amount;
        $data['payment_method'] = "Offline Payment"; 

        $user = User::where('id', $request->user_id)->first();
        $user_profile = $user->profile;
        $user_profile->balance = $user_profile->balance + $data['amount'];
        $user_profile->save();

        $wallet = new Wallet;
        $wallet->user_id = $user->id;
        $wallet->amount = $data['amount'];
        $wallet->payment_method = $data['payment_method'];
        $wallet->payment_details = "Offline Payment";
        $wallet->type = "Recharge By " . Auth::user()->name;
        $wallet->save();

        flash(translate('Wallet balance has been added'))->success();
        return back();
    }
}
