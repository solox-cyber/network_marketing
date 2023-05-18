<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;



class SerialNumberNotification extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $serialNumber;
    public $email;

    /**
     * Create a new message instance.
     *
     * @param  string  $serialNumber
     * @return void
     */
    public function __construct($serialNumber)
    {
        $this->serialNumber = $serialNumber;
        $this->email = Auth::user()->email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('emails.serial_number')
                    ->subject('Serial Number Notification');
    }
}
