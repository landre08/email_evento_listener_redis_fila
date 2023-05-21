<?php

namespace App\Listeners;

use App\Mail\NovoAcesso;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Mail;

class LoginListener
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
     * @param  object  $event
     * @return void
     */
    public function handle(Login $event)
    {
        info('Logou');
        info($event->user->name);

        $quendo = now()->addMinutes(1);
        // user, user[], email
        Mail::to($event->user)
            //->send(new NovoAcesso($event->user));
            //->queue(new NovoAcesso($event->user));
            ->later($quendo, new NovoAcesso($event->user));
    }
}
