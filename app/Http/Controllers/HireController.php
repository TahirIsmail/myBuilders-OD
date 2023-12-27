<?php

namespace App\Http\Controllers;

use App\Utility\EmailUtility;
use App\Utility\NotificationUtility;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ProjectCategory;
use App\Models\HireInvitation;
use App\Models\ProjectUser;
use App\Models\ChatThread;
use App\Models\Project;
use App\Models\User;
use Auth;

class HireController extends Controller
{
    //private project freelancer
    public function private_projects()
    {
        $private_projects = HireInvitation::where('sent_to_user_id', Auth::user()->id)->where('status', '=', 'pending')->paginate(8);
        return view('frontend.default.user.freelancer.projects.private', compact('private_projects'));
    }

    //freelancer invition sending page
    public function freelancer_invition($username)
    {
        $freelancer = User::where('user_name', $username)->first();
        $categories = ProjectCategory::all();
        $client_package = Auth::user()->userPackage;
        return view('frontend.default.user.freelancer_hire_invitation.create', compact('freelancer', 'categories', 'client_package'));
    }

    //Store sent info for hiring freelancers
    public function store(Request $request)
    {
        $project = new Project;
        $project->name = $request->name;
        $project->type = $request->projectType;
        $project->price = $request->price;
        $project->project_category_id = $request->category_id;
        $project->excerpt = $request->excerpt;
        $project->skills = '[]';
        $project->private = '1';
        $project->biddable = '0';
        $project->description = $request->description;
        if ($request->attachments != null) {
            $project->attachment = json_encode(explode(",",$request->attachment));
        }
        $project->client_user_id = Auth::user()->id;
        $project->slug = Str::slug($request->name, '-').date('Ymd-his');
        if ($project->save()) {
            $hire_invitation = new HireInvitation;
            $hire_invitation->project_id = $project->id;
            $hire_invitation->sent_to_user_id = $request->freelancer_id;
            $hire_invitation->sent_by_user_id = Auth::user()->id;
            $hire_invitation->save();
            $existing_chat_thread = ChatThread::where('sender_user_id', Auth::user()->id)->where('receiver_user_id', $request->freelancer_id)->first();
            if ($existing_chat_thread == null) {
                $existing_chat_thread = new ChatThread;
                $existing_chat_thread->thread_code = $request->freelancer_id.date('Ymd').Auth::user()->id;
                $existing_chat_thread->sender_user_id = Auth::user()->id;
                $existing_chat_thread->receiver_user_id = $request->freelancer_id;
                $existing_chat_thread->save();
            }

            //from client to freelancer
            NotificationUtility::set_notification(
                "freelancer_proposal_for_project",
                translate('You have recieved a proposal for a project by'),
                route('project.details',['slug'=>$project->slug],false),
                $request->freelancer_id,
                Auth::user()->id,
                'freelancer'
            );
            EmailUtility::send_email(
                translate('You got a new project proposal for project -').$project->name,
                translate('You have recieved a proposal for a project by'). $project->client->name,
                get_email_by_user_id($request->freelancer_id),
                route('project.details',['slug'=>$project->slug])
            );

            flash(translate('Invitation has been sent successfully.'))->success();
            return redirect()->route('dashboard');
        }
        else {
            flash(translate('Sorry! Something went wrong.'))->error();
            return back();
        }
    }

    //after taking interview client hires freelancer
    public function hire(Request $request)
    {
        $project = Project::find($request->project_id);
        $project->biddable = 0;
        $project->save();

        if($project->project_user == null){
            $project_user = new ProjectUser;
            $project_user->project_id = $request->project_id;
            $project_user->user_id = $request->user_id;
            $project_user->hired_at = $request->amount;
            $project_user->save();
        }

        $invited_project = HireInvitation::where('project_id', $project->id)->first();
        if($invited_project != null){
            $invited_project->status = 'accepted';
            $invited_project->save();
        }

        //from freelancer to client
        NotificationUtility::set_notification(
            "freelancer_hired_for_project",
            translate('You have been hired for a project by'),
            route('project.details',['slug'=>$project->slug],false),
            $request->user_id,
            Auth::user()->id,
            'freelancer'
        );
        EmailUtility::send_email(
            translate('You have been hired for project -').$project->name,
            translate('You have been hired for a project by '). $project->client->name,
            get_email_by_user_id($request->user_id),
            route('project.details',['slug'=>$project->slug])
        );

        flash(translate('You have hired successfully.'))->success();

        return back();
    }

    //rejecting a private project offer
    public function reject(Request $request)
    {
        $invited_project = HireInvitation::findOrFail(decrypt($request->id));
        $invited_project->status = 'rejected';
        $invited_project->save();

        $project = $invited_project->project;
        $project->cancel_status = 1;
        $project->cancel_by_user_id = Auth::user()->id;
        $project->save();

        flash(translate('You have rejected the private project offer'))->success();
        return back();
    }
}
