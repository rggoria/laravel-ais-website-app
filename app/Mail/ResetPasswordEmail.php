<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class ResetPasswordEmail extends Mailable
{
    public $data;
    public $token;

    public function __construct($data, $token)
    {
        $this->data = $data;
        $this->token = $token;
    }

    public function build()
    {
        return $this->subject('Reset AIS Password')
                    ->view('emails.reset')
                    ->with([
                        'data' => $this->data,
                        'token' => $this->token,
                    ]);
    }
}
