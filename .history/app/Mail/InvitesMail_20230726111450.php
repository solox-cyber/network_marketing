<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class InvitesMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
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
    public function __construct(User $user, $contactId, $salesId)
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
        $registrationLink = url('contact_register', ['contact_id' => $this->contactId, 'sales_id' => $this->salesId]);

        return $this->view('emails.contact_mails')
                    ->with([
                        'user' => $this->user,
                        'registrationLink' => $registrationLink,
                    ])
                    ->subject('Registration Payment Link');
    }
}
