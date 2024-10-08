<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class ResetPasswordEmail extends Mailable
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('Reset AIS Password')
                    ->view('emails.reset')
                    ->with('data', $this->data);
    }
}
