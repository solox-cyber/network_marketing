<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AccountExpired extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $user;
    protected $activationLink;

    public function __construct(User $user, $activationLink)
    {
        $this->user = $user;
        $this->activationLink = $activationLink;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Your Account Has Expired')
            ->view('emails.account_expired', [
                'user' => $this->user,
                'activationLink' => $this->activationLink,
            ]);
    }
}
