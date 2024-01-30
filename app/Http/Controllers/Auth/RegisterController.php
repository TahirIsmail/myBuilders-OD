<?php

namespace App\Http\Controllers\Auth;

use Session;
use Carbon\Carbon;
use App\Utility\EmailUtility;
use App\Utility\NotificationUtility;
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
use App\Rules\UniqueEmailForUserType;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Verify\Service;
use Illuminate\Support\MessageBag;
// use App\Http\Requests\JobPostRequest;
use App\Models\Project;
use App\Models\Skill;
use App\Models\TradingInfo;

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


        $user = User::create([
            'name' => $data['fullName'],
            'email' => $data['email'],
            'user_type' => $data['user_type'],
            'user_name' => $data['username'],
            'password' => Hash::make($data['password']),

        ]);

        $address = new Address(['phone' =>  $data['phone']]);
        $user->address()->save($address);

        $user_profile = new UserProfile;
        $user_profile->user_id = $user->id;
        $user_profile->save();

        return $user;
    }
    protected function createTradesmen(array $data)
    {
        
        // dd($data);
        // 2. Assign values to the user attributes
        
        $skill=collect($data['strongesttrades'])->map(function($item ,$key) {
            return collect($item['skill'])->pluck('name');
             
        })->toJson();
        
        $userData = [
            'name' => $data['name'] ?? null,
            'email' => $data['email'] ?? null,
            'password' => isset($data['password']) ? Hash::make($data['password']) : null,
            'user_name' => $data['trading_info']['trading_name'] ?? null,
            'user_type' => $data['user_type'] ?? null,
        ];
        $user = User::create($userData);
        // 3. Save the user
        $user_profile = new UserProfile;
        $user_profile->bio = $data['bio'];
        $user_profile->distance =$data['workaddress']['distance'];
        $user_profile->user_id = $user->id;
       
        
        $user_profile->skills = json_encode($skill);
        $user_profile->save();
        $tradingInfo=[
            'partnersname' => $data['trading_info']['partners_name'] ?? '',
            'trade_name' => $data['trading_info']['trading_name'] ?? '',
            'operating_as' => $data['trading_info']['operating_as'] ?? '',
            'trade_regd_name' => $data['trading_info']['registered_company'] ?? '',
            'cmp_regd_no' => $data['trading_info']['company_registration'] ?? '',
            'user_id' => $user->id
        ];

        TradingInfo::create($tradingInfo);
        
        // 4. Create and associate trading info
        
        

        // 5. Create and associate work address
        $workAddress = new Address([
            'postal_code' => $data['workaddress']['postcode'],
            'street' => $data['workaddress']['street'],
            'city' => $data['workaddress']['town'],
            'country' => $data['workaddress']['country'],
            'region' => $data['workaddress']['region'],
            'phone' => $data['phone'],
            // 'work_address' => $data['workaddress']['work_address'], // Remove or handle separately
            'latitude' => $data['workaddress']['location']['lat'],
            'longitude' => $data['workaddress']['location']['lng'],
        ]);
        

        // Associate work address with the user
        $user->address()->save($workAddress);

        // 6. Create and associate strongest trades
        

        return $user;
    }
    protected function addUserJob(array $job_info, int $user_id)
    {




        $project = new Project;
        $project->name = $job_info['jobHeadline'];
        $project->jobquestionsarray = json_encode($job_info['JobQuestionAnswer']);
        $project->job_postal_code = $job_info['postcode'];
        $project->project_category_id = $job_info['SelectedCategory']['id'];
        $project->description = $job_info['JobDescription'];
        $project->excerpt = $job_info['JobDescription'];
        $project->skills =  json_encode(Skill::where('name', 'LIKE', '%' . substr($job_info['SelectedCategory']['name'], 0, 6) . '%')->pluck('id'));
        $project->client_user_id = $user_id;
        $project->slug = Str::slug($job_info['jobHeadline'], '-') . date('Ymd-his');
        $project->save();
        $jobaddress = new Address(
            [
                'country' => $job_info['country'],
                'region' => $job_info['region'],
                'latitude' => $job_info['latitude'],
                'longitude' => $job_info['longitude'],
                'street' => $job_info['street'],
                'city' => $job_info['city'],
                'postal_code' => $job_info['postcode']
            ]
        );
        $project->address()->save($jobaddress);

        NotificationUtility::set_notification(
            "A_new_Job_has_been_created_by_client",
            translate('A new Job has been created by'),
            route('project.details', ['slug' => $project->slug], false),
            0,
            $user_id,
            'admin'
        );
        EmailUtility::send_email(
            translate('A new Job has been created'),
            translate('A new Job has been created by') . User::where('id', $user_id)->value('name'),
            system_email(),
            route('project.details', ['slug' => $project->slug])
        );
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => [
                'required',
                'email',
                new UniqueEmailForUserType($request->input('user_type'))
            ],
            'user_type' => 'required',

        ]);
        if ($request->user_type == 'freelancer') {

            $user = $this->createTradesmen($request->all());
        } else {
            $user = $this->create($request->all());

            $this->addUserJob($request->job_information, $user->id);
        }
        $this->guard()->login($user);


        if ($user->email != null) {
            if (get_setting('email_verification') != 1) {
                $user->email_verified_at = date('Y-m-d H:m:s');
                $user->save();
                flash(translate('Registration successful.'))->success();
            } else {
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
            ?: response()->json(['message' => 'Registration Failed'], 200)->header('X-Redirect', $this->redirectPath());
    }

    protected function registered(Request $request, User $user)
    {
        $verification = $this->verify->startVerification($user->address->phone, $request->post('channel', 'sms'));
        if (!$verification->isValid()) {

            $this->deleteUserProject($user);
            $user->profile()->forceDelete();
            $user->address()->forceDelete();

            $user->forceDelete();


            $errors = new MessageBag();
            foreach ($verification->getErrors() as $error) {
                $errors->add('verification', $error);
            }

            return response()->json(['message' => $errors], 422)->header('X-Redirect', '/');
        }

        $messages = new MessageBag();
        $messages->add('verification', "Code sent to {$request->user()->address()->phone}");

        //return redirect('/verify')->with('messages', $messages);
        return response()->json(['message' => $messages], 200)->header('X-Redirect', '/verify');
    }

    function deleteUserProject($user)
    {
        return Project::where('client_user_id', $user->id)->forceDelete();
    }
}
