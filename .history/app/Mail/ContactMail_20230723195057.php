<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $contactId;
    public $salesId;

    /**
     * Create a new message instance.
     *
     * @param  User  $user
     * @param  int  $contactId
     * @param  int  $salesId
     * @return void
     */
    public function __construct(\App\Models\User $user, $contactId, $salesId)
    {
        $this->user = $user;
        $this->contactId = $contactId;
        $this->salesId = $salesId;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact_mail')
                    ->with([
                        'user' => $this->user,
                        'contactId' => $this->contactId,
                        'salesId' => $this->salesId,
                    ])
                    ->subject('Registration Link for Contact');
    }
}
