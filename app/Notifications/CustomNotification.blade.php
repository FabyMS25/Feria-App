<?php
namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Notifications\ShouldQueue;
use Illuminate\Notifications\Notification;

class CustomNotification extends Notification implements ShouldQueue
{
    use Queueable;

    // Define the notification behavior, such as the message, subject, etc.
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    public function toMail($notifiable)
    {
        // Define the email representation of the notification
    }

    public function toArray($notifiable)
    {
        // Define the database representation of the notification
    }
}
