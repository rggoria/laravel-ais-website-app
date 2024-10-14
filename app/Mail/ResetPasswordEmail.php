<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class ResetPasswordEmail extends Mailable
{
    public $user; // Change from $data to $user
    public $token;

    public function __construct($user, $token)
    {
        $this->user = $user; // Assign the user object
        $this->token = $token;
    }

    public function build()
    {
        return $this->subject('Reset AIS Password')
                    ->view('emails.reset')
                    ->with([
                        'user' => $this->user, // Pass the user object to the view
                        'token' => $this->token,
                    ]);
    }
}

