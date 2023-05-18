<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class SerialNumberNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $serialNumber;

    /**
     * Create a new message instance.
     *
     * @param  string  $serialNumber
     * @return void
     */
    public function __construct($serialNumber)
    {
        $this->serialNumber = $serialNumber;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $user = Auth::user(); // Retrieve the authenticated user
        return $this->view('emails.serial_number')
                    ->subject('Serial Number Notification');
    }
}
