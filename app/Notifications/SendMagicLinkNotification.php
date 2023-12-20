<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Grosv\LaravelPasswordlessLogin\LoginUrl;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendMagicLinkNotification extends Notification
{
    use Queueable;
    public $jobInformation;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($jobInformation)
    {
        //
        $this->jobInformation = $jobInformation;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $generator = new LoginUrl($notifiable);
        $generator->setRedirectUrl('/post_job_magic?jobinformation='.urlencode(json_encode($this->jobInformation)));
        $url = $generator->generate();

        return (new MailMessage)
                    ->subject('Your Login Magic Link!')
                    ->line('Click this link to log in!')
                    ->action('Continue Posting Your Job', $url)
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
