<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Project;
use LaravelFCM\Facades\FCM;
use Illuminate\Http\Request;
use App\Models\ProjectConversation;
use Illuminate\Support\Facades\Auth;
use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;

class FCMController extends Controller
{
    public function save_token(Request $req){
        $input = $req->all();
        $fcm_token = $input['fcm_token'];
        $user_id = $input['user_id'];

        $user = User::findOrFail($user_id);
        $user->fcm_token = $fcm_token;
        $user->save();
        
        return response()->json([
            'success'=>true,
            'message'=>'User token updated successfully.'
        ]);
    }

    public function project_conversation(Request $request){
        $project = Project::find($request->project_id);
        $project_conversation = ProjectConversation::firstOrCreate(
            [
                'project_id' =>  $request->project_id,
                'client_id'       =>  $project->client_user_id,
                'freelancer_id'   =>  $project->project_user->user_id
            ],
            [
                'conversation_id' => $request->project_id.$project->client_user_id.date('Ymd').$project->project_user->user_id,
            ]
        );
        return $project_conversation;
    }

    public function sendMessage(Request $request){
        $project_conversation = ProjectConversation::where('conversation_id', $request->conversation_id)->first();
        if ($project_conversation) {
            if ($project_conversation->client_id == Auth::user()->id) {
                $project_conversation->update(['freelancer_notify' => 1]);
            }elseif($project_conversation->freelancer_id == Auth::user()->id){
                $project_conversation->update(['client_notify' => 1]);
            }
        }
        $this->broadcastMessage(Auth::user()->id, $request->user_id, $request->message);
        return true;
    }

    public function view_messages(Request $request){
        $limit = $request->limit;
        $chats = $request->conversations;
        $project_conversation = ProjectConversation::where('conversation_id', $request->conversation_id)->first();
        if ($project_conversation) {
            if ($project_conversation->client_id == Auth::user()->id) {
                $project_conversation->update(['client_notify' => 0]);
            }elseif($project_conversation->freelancer_id == Auth::user()->id){
                $project_conversation->update(['freelancer_notify' => 0]);
            }
        }

        return view('frontend.default.partials.project-chat-messages', compact('chats', 'limit'));
    }

    private function broadcastMessage($sender_user_id, $receiver_user_id, $message ){
        $sender_user = User::findOrFail($sender_user_id);
        $optionBuilder = new OptionsBuilder();
        $optionBuilder->setTimeToLive(60*20);

        $notificationBuilder = new PayloadNotificationBuilder('New Message From: '.$sender_user->name);
        $notificationBuilder->setBody($message)
					->setSound('default')
                    ->setClickAction(route('projects.my_running_project'));
        
        $dataBuilder = new PayloadDataBuilder();
        $dataBuilder->addData([
            'sender_name' => $sender_user->name,
            'message'    => $message
        ]);

        $option = $optionBuilder->build();
        $notification = $notificationBuilder->build();
        $data = $dataBuilder->build();

        $tokens = User::where('id', $receiver_user_id)->whereNotNull('fcm_token')->pluck('fcm_token')->toArray();

        $downstreamResponse = FCM::sendTo($tokens, $option, $notification, $data);
        return $downstreamResponse->numberSuccess();
    }
}
