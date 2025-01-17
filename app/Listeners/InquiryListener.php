<?php

namespace App\Listeners;

use App\Events\Inquiry\Created;
use App\Models\User;
use App\Notifications\Inquiry\CreatedNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class InquiryListener
{

    public function handle(Created $event): void
    {
      $inquiry = $event->inquiry;
      $admins = User::admin()->verified()->limit(5)->get();
      foreach($admins as $admin){
          $admin->notify(new CreatedNotification($inquiry));
      }
    }
}
