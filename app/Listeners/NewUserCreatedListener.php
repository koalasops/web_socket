<?php

namespace App\Listeners;

use App\Events\NewUserCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NewUserCreatedListener
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
     * @param  \App\Events\NewUserCreated  $event
     * @return void
     */
    public function handle(NewUserCreated $event)
    {
        $user = $event->user;
        broadcast(new NewUserCreated($user))->toOthers();
    }
}
