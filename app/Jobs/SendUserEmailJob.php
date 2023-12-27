<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\EmailManager;
use Mail;
class SendUserEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $email_attributes;
    protected $email;
    public function __construct($email_attributes,$email)
    {
        //
        $email_attributes = $this->email_attributes;
        $email = $this->$email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        try {
            Mail::to($this->email)->queue(new EmailManager($this->email_attributes));
            
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
