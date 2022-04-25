<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($pass,$email,$recipient)
    {
        $this->pass = $pass;
        $this->email = $email;
        $this->recipient = $recipient;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Nouveau compte')
                    ->view('mailTemplate.newPassword',['email' => $this->email,'pass' => $this->pass,'recipient' => $this->recipient]);
    }
}
