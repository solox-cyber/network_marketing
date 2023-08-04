<?php
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $country, $phone_number, $program, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->email = $country;
        $this->phone_number = $phone_number;
        $this->email = $program;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact-form')
                    ->subject('New Contact Form Submission')
                    ->from($this->email, $this->name);
    }
}
