<?php

namespace App\Listeners;

use App\Events\UserRegister;
use App\Mail\WelcomeEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

// php artisan make:listener SendWelcomeEmail --event=UserRegister

class SendWelcomeEmail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserRegister $event): void
    {
        Mail::send(new WelcomeEmail($event->email));
    }
}
