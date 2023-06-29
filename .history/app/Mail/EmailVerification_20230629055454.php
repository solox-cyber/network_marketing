<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Notifications\Messages\MailMessage;
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


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Email Verification')
                    ->view('emails.emailVerification')
                    ->with([
                        'user' => $this->user,
                        'serialNumber' => $this->serialNumber,
                    ]);
    }

    public function toMail($notifiable)
    {
        $verificationUrl = $this->verificationUrl($notifiable);
        $serialNumber = $notifiable->serial_number;
        $name = $notifiable->name;

        return (new MailMessage)
            ->subject('Congratulations! Your Reserved Seat Awaits at Lern.Africa!')
            ->view('emails.emailVerification', [
                'verificationUrl' => $verificationUrl,
                'serialNumber' => $this->,
                'name' => $name,
            ]);
    }
}
