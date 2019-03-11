<?php

namespace App\Listeners;

use App\Events\RegisterUser;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class VerificationUser
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  RegisterUser  $event
     * @return void
     */
    public function handle(RegisterUser $event)
    {
//        dd($event->user->email);
    }
}
