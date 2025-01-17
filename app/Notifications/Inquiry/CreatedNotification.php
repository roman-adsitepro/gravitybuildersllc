<?php

namespace App\Notifications\Inquiry;

use App\Models\Inquiry;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CreatedNotification extends Notification
{
    use Queueable;

    public function __construct(
        public Inquiry $inquiry
    ) { }

    public function via(object $notifiable): array
    {
        return ['mail', 'database'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('New Inquiry on the Websnac website')
            ->line('New Inquiry on the Websnac website.')
            ->action('View Inquiry', route('filament.admin.resources.inquiries.view', $this->inquiry))
            ->line('Thank you for using our application!');
    }

    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }

}