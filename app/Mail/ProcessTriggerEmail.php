<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class ProcessTriggerEmail extends Mailable
{
    public $order; // Use Order model instead of data

    public function __construct($order)
    {
        $this->order = $order; // Pass the order instance
    }

    public function build()
    {
        return $this->subject('Order #' . $this->order->order_id . ' Confirmation and Access to AIS Gateway')
                    ->view('emails.process_trigger')
                    ->with('order', $this->order); // Pass the order instance to the view
    }
}
