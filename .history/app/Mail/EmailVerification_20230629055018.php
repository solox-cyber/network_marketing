<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailVerification extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $serialNumber;
    /**
     * Create a new message instance.
     *
     * @return void
     */
     public function __construct(User $user, $serialNumber)
    {
        $this->user = $user;
        $this->serialNumber = $serialNumber;
    }

    public function build()
    {
        return $this->subject('Email Verification')
                    ->view('emails.emailVerification')
                    ->with([
                        'user' => $this->user,
                        'serialNumber' => $this->serialNumber,
                    ]);
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('view.name');
    }
}
