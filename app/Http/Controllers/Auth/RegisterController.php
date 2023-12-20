<?php

namespace App\Http\Controllers\Auth;

use Session;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Address;
use App\Models\UserProfile;
use Illuminate\Support\Str;
use App\Rules\RecaptchaRule;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Verify\Service;
use Illuminate\Support\MessageBag;
use App\Http\Requests\JobPostRequest;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';
    protected $verify;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Service $twilio_service)
    {
        $this->middleware('guest');
        $this->middleware('cors');
        $this->verify = $twilio_service;

    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
       
        return view('frontend.default.user_sign_up');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
       dd($data);
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'user_type' => 'client',
            'user_name' =>Str::slug($data['username'], '-').date('Ymd-his'),
            'public_username' => $data['username'],
            'password' => Hash::make($data['password']),
            
        ]);

        $address = new Address(['phone' =>  $data['phone']]);
        $user->address()->save($address);

        $user_profile = new UserProfile;
        $user_profile->user_id = $user->id;        
        $user_profile->save();
        
        return $user;
    }
    
    public function register(JobPostRequest $request)
    {
       
        
        $user = $this->create($request->validated() + $request->all());
       
        $this->guard()->login($user);

        if($user->email != null){
            if(get_setting('email_verification') != 1){
                $user->email_verified_at = date('Y-m-d H:m:s');
                $user->save();
                flash(translate('Registration successful.'))->success();
            }
            else {
                
               
                try {
                    
                    
                    $user->sendEmailVerificationNotification();
                    flash(translate('Registration successful. Please verify your email.'))->success();
                } catch (\Throwable $th) {
                    $user->delete();
                    flash(translate('Registration failed. Please try again later.'))->error();
                }
            }
        }

        return $this->registered($request, $user)
            ?: response()->json(['redirectPath' => $this->redirectPath()]);
    }

    protected function registered(Request $request, User $user)
    {
        $verification = $this->verify->startVerification($user->address->phone, $request->post('channel', 'sms'));
        if (!$verification->isValid()) {
            $user->delete();

            $errors = new MessageBag();
            foreach($verification->getErrors() as $error) {
                $errors->add('verification', $error);
            }

            return view('auth.register')->withErrors($errors);
        }

        $messages = new MessageBag();
        $messages->add('verification', "Code sent to {$request->user()->phone_number}");

        return redirect('/verify')->with('messages', $messages);
    }

}
