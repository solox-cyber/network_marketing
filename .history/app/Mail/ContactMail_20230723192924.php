<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contactId;
    public $salesId;

    /**
     * Create a new message instance.
     *
     * @param  int  $contactId
     * @param  int  $salesId
     * @return void
     */
    public function __construct($contactId, $salesId)
    {
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
                        'contactId' => $this->contactId,
                        'salesId' => $this->salesId,
                    ])
                    ->subject('Registration Link for Contact');
    }
}
