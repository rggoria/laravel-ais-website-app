<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class ProcessTriggerEmail extends Mailable
{
    public $order; // Use Order model instead of data
    public $otp; // Add the OTP property

    public function __construct($order, $otp)
    {
        $this->order = $order; // Pass the order instance
        $this->otp = $otp; // Pass the OTP
    }

    public function build()
    {
        return $this->subject('Order #' . $this->order->order_id . ' Confirmation and Access to AIS Gateway')
                    ->view('emails.process_trigger')
                    ->with([
                        'order' => $this->order,
                        'otp' => $this->otp, // Pass the OTP to the view
                    ]);
    }
}
