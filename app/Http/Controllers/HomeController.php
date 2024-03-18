<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Ballen\Distical\Calculator as DistanceCalculator;
use Ballen\Distical\Entities\LatLong;
use App\Models\User;
use App\Models\Project;
use App\Models\ChatThread;
use App\Models\UserProfile;
use App\Utility\EmailUtility;
use App\Models\Country;
use App\Utility\NotificationUtility;
use App\Models\ProjectCategory as Categories;
use App\Models\Skill;
use App\Models\ProjectCategory;
use App\Models\AssessmentQuestion;
use App\Models\AssessmentAnswer;
use App\Models\Question;
use App\Notifications\SendMagicLinkNotification;
use Carbon;
use Illuminate\Support\Str;
use App\Models\Address;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Eloquent\Builder;
use Artisan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['categories'] = Categories::select('name', 'slug')->orderBy('name')->get();

        return view('frontend.default.index', $data);
    }

    //Admin login
    public function admin_login()
    {
        if (Auth::check() && (auth()->user()->user_type == "admin" || auth()->user()->user_type == "staff")) {
            return redirect()->route('home');
        }
        return view('auth.login');
    }

    //User login
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }
        return view('frontend.default.user_login');
    }

    public function admin_dashboard()
    {
        return view('admin.default.dashboard');
    }


    //Redirect user-based dashboard
    public function dashboard()
    {
        // $user_profile = UserProfile::where('user_id', Auth::user()->id)->first();



        if (isFreelancer()) {
            $user_projects = auth()->user()->projectUsers->map(function ($projectUser) {
                $projectUser->status = $projectUser->milestones->contains('paid_status', 1) ? 'paid' : 'pending';
                return $projectUser;
            });
            
            return view('frontend.default.user.freelancer.dashboard',compact('user_projects'));
        } elseif (isClient()) {
            return view('frontend.default.user.client.dashboard');
        } else {
            abort(404);
        }
    }

    public function getFreelancers(Request $request) {
        $latitude = $request->input('latitude');
$longitude = $request->input('longitude');
$userCord = new LatLong($latitude, $longitude);
// Query freelancers within a 50-mile radius
$freelancers = \App\Models\User::where('user_type', 'freelancer')
->with('address')
->get()
->filter(function($freelancer) use ($userCord) {
    if ($freelancer->address && $freelancer->address->latitude && $freelancer->address->longitude) {
        $freelancerLatLng = new LatLong($freelancer->address->latitude, $freelancer->address->longitude);
        $temp = new DistanceCalculator($userCord, $freelancerLatLng);
        $distance = round($temp->get()->asMiles(), 2);
        return $distance < 50; // adjust the range as needed (in kilometers)
    }
    return false;
});
    
        // Return the updated list of freelancers as a JSON response
        //resources\views\frontend\default\user\freelancer\partials
        return response()->json(view('frontend.default.user.client.partials.freelancers-list', compact('freelancers'))->render());
    }
    


    //Show details info of specific project
    public function project_details($slug)
    {
        $project = Project::where('slug', $slug)->with('address')->first();
        
        $project_questionare = collect(json_decode($project->jobquestionsarray));

        $questionare =  $project_questionare->map(function ($item, $key) {
            return [
                "question" => Question::where('id', $item->question_id)->select('question')->value('question'),
                // "question" => $item->question_id,

                "answer" => $item->answer
            ];
        });
        
        $projCord = new LatLong($project->address->latitude, $project->address->longitude);
        $suggested_tradesmen =\App\Models\User::where('user_type', 'freelancer')
            ->with('address','profile','trading_info')
            ->get()
            ->filter(function($freelancer) use ($projCord,$project) {
                if ($freelancer->address && $freelancer->address->latitude && $freelancer->address->longitude) {
                    $freelancerLatLng = new LatLong($freelancer->address->latitude, $freelancer->address->longitude);
                    $temp = new DistanceCalculator($projCord, $freelancerLatLng);
                    $distance = round($temp->get()->asMiles(), 2);
                   
                    if($distance < 50){
                        $skills = json_decode($freelancer->profile->skills, true);
                            if (is_array($skills)) {
                                $freelancer->distance = $distance;
                                return (in_array($project->project_category->skill->id, $skills));
                            }
                        
                    } // adjust the range as needed (in kilometers)
                }
                return false;
            });

        $userId  = auth()->user()->id;
        $user = \App\Models\User::with('profile','address')->where('id',auth()->user()->id)->first();
        
        $projects = \App\Models\Project::has('address')->notcancel()->biddable()
    ->whereDoesntHave('projectBids', function ($query) use ($userId) {
        $query->where('bid_by_user_id', $userId);
    })
    ->with(['project_category', 'address'])
    ->get();
        $userCord = new \Ballen\Distical\Entities\LatLong($user->address->latitude, $user->address->longitude);
        $projects->transform(function ($project) use ($userCord) {
            $projectCord = new \Ballen\Distical\Entities\LatLong($project->address->latitude, $project->address->longitude);
            $distance = new \Ballen\Distical\Calculator($userCord, $projectCord); // Assuming you have a method to calculate distance in your LatLong class
            $project->distance_from_user =  round($distance->get()->asMiles(), 2); // Adding distance to the project object
            return $project;
        });
        $radius = $user->profile->distance;

        $projectsInWorkingArea = $projects->filter(function ($project) use ($radius) {
            return $project->distance_from_user <= $radius;
        });
    
            
        return view('frontend.default.project-single', compact('project', 'questionare','suggested_tradesmen','projectsInWorkingArea'));
    }

    //Show details info of specific project
    public function private_project_details($slug)
    {
        $project = Project::where('slug', $slug)->first();
        if ($project != null) {
            $id = $project->id;
            $user = Auth::user()->id;
            $chat_thread = ChatThread::where(function ($query) use ($id) {
                $query->where('project_id', '=', $id);
            })->where(function ($query) use ($user) {
                $query->where('sender_user_id', '=', $user)
                    ->orWhere('receiver_user_id', '=', $user);
            })->first();

        }
        return view('frontend.default.private_project_single', compact('project', 'chat_thread'));
    }

    //Show all project list to user
    // public function all_projects(Request $request)
    // {
    //     $projects = Project::biddable()->notcancel()->where('private', '0')->latest();
    //
    //     $keyword = null;
    //     if($request->has('keyword')){
    //         $keyword = $request->keyword;
    //         $projects = $projects->where('name', 'like', '%'.$keyword.'%');
    //     }
    //     $total = count($projects->get());
    //     $projects = $projects->paginate(8);
    //     return view('frontend.default.projects-listing', compact('projects', 'keyword', 'total'));
    // }

    //Show specific client details to user
    public function client_details($username)
    {
        $client = User::with('profile')->where('user_type','client')->where(function($query) use ($username){
            $query->where('user_name',$username);
        })->first();

        $open_projects = Project::where('client_user_id', $client->id)->biddable()->open()->notcancel()->latest()->get();
        return view('frontend.default.client-single', compact('client', 'open_projects'));
    }

    //Show all client's list to user
    public function client_list()
    {
        $clients = UserProfile::where('user_role_id', '3')->paginate(8);
        $total_clients = UserProfile::where('user_role_id', '3')->get();
        return view('frontend.default.clients-listing', compact('clients', 'total_clients'));
    }

    //Show all freelancer's list to user
    public function freelancer_list()
    {
        $freelancers = UserProfile::where('user_role_id', '2')->paginate(8);
        $total_freelancers = UserProfile::where('user_role_id', '2')->get();
        return view('frontend.default.freelancers-listing', compact('freelancers', 'total_freelancers'));
    }

    //Show specific freelancer details to user
    public function freelancer_details($username)
    {
        $freelancer = User::where('user_type','freelancer')->where(function($query) use ($username){
                $query->where('user_name',$username);
        })->first();
        return view('frontend.default.freelancer-single', compact('freelancer'));
    }

    //check if username exists
    public function user_name_check(Request $request)
    {
        $user_name = User::where('user_name', '=', Str::slug($request->username, '-'))->first();
        if ($user_name != null) {
            $response = "<span style='color: red; font-size: 8pt'>" . translate('User name already Exist') . ".</span>";
            return $response;
        } else {
            $response = "<span style='color: green; font-size: 8pt'>" . translate('Available') . ".</span>";
            return $response;
        }
    }

    public function send_email_verification_request(Request $request)
    {
        return send_email_verification_email();
    }

    public function verification_confirmation($code)
    {
        $user = User::where('verification_code', $code)->first();
        if ($user != null) {
            $user->email_verified_at = Carbon::now();
            $user->save();

            flash(translate('Your email has been verified successfully'))->success();
        } else {
            flash(translate('Sorry, we could not verifiy you. Please try again'))->warning();
        }

        return redirect()->route('dashboard');
    }
    public function post_job()
    {
        $data['user'] = auth()->user();

        // Return or process $projectCategories as needed
        return view('frontend.default.post_projects', $data);
    }

    public function checkuser(Request $request)
    {

        $email = $request->input('email');
        $jobInformation = $request->input('jobInformation');

        if (userExistsWithEmail($email)) {
            // User with the specified email exists
            // Add your authentication logic here
            $user = User::where('email', $email)->first();

            if ($user) {
                $user->notify(new SendMagicLinkNotification($jobInformation));
            }


            return response()->json(['msg' => "User Already Exists", 'code' => 200, 'user' => $user]);
        } else {
            // User does not exist
            // Handle accordingly
            return response()->json(['msg' => "User Does not Exists as Client or its doesnot exist completely", 'code' => 404]);
        }
    }
    public function post_job_magic(Request $request)
    {
        $jobInformation = $request->input('jobinformation');
        $jobdata = json_decode($jobInformation, true);

        return view('frontend.default.magic-job-post', $jobdata, ['jobInformation' => $jobdata]);
    }

    public function storemagicjobpost(Request $request)
    {


        $project = new Project;
        $project->name =  $request->jobHeadline;
        $project->jobquestionsarray = json_encode($request->JobQuestionAnswer);
        $project->job_postal_code = $request->postcode;
        $project->isValidPostalCode = isset($request->isValidPostalCode) ? 1 : 0;
        $project->project_category_id = $request->SelectedCategory['id'];
        $project->description = $request->JobDescription;
        $project->excerpt = $request->JobDescription;
        $project->skills =  json_encode(Skill::where('name', 'LIKE', '%' . substr($request->SelectedCategory['name'], 0, 6) . '%')->pluck('id'));
        $project->client_user_id = Auth()->user()->id;
        $project->slug = Str::slug($request->jobHeadline, '-') . date('Ymd-his');
        $project->save();
        $jobaddress = new Address(
            [
                'country' => $request->country,
                'region' => $request->region,
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
                'postal_code' => $request->postcode,
                'street' => $request->street,
                'city' => $request->city,
            ]
        );
        $project->address()->save($jobaddress);

        NotificationUtility::set_notification(
            "A_new_Job_has_been_created_by_client",
            translate('A new Job has been created by'),
            route('project.details', ['slug' => $project->slug], false),
            0,
            Auth()->user()->id,
            'admin'
        );
        EmailUtility::send_email(
            translate('A new Job has been created'),
            translate('A new Job has been created by') . Auth()->user()->name,
            system_email(),
            route('project.details', ['slug' => $project->slug])
        );



        // Redirect to the specified route
        return response()->json(['message' => 'Job posted successfully', 'code' => 200]);
    }

    function getSkills()
    {

        return response()->json(ProjectCategory::with('skill')->take(44)->get());
    }
    function getAssessment(Request $request)
    {
        $assessment = AssessmentQuestion::with('answers')->where('job_category_id', $request->id)->get();
        return response()->json($assessment);
    }
    function clearCache(Request $request)
    {
        Artisan::call('cache:clear');
        Artisan::call('view:clear');
        flash(translate('Cache cleared successfully'))->success();
        return back();
    }
    function trade_sign_content()
    {
        return view('frontend.default.content.trade_sign_up');
    }

    function  job_sign_content()
    {
        return view('frontend.default.content.post_sign_up');
    }

    function  trade_career_content()
    {
        return view('frontend.default.content.trade_career');
    }

    
    function  about_content()
    {
        return view('frontend.default.content.about');
    }
    

function  contact_content()
    {
        return view('frontend.default.content.contact');
    }
}
