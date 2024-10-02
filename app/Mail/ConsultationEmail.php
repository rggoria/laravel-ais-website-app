<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class ConsultationEmail extends Mailable
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('Consultation Inquiry')
                    ->view('emails.consultation')
                    ->with('data', $this->data);
    }
}
