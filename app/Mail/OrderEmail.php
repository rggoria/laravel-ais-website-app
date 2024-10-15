<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $order; // Use Order model instead of data
    public $name; // Add the OTP property

    public function __construct($order)
    {
        $this->order = $order; // Pass the order instance
    }

    public function build()
    {
        return $this->subject('Order #' . $this->order->order_id . ' Confirmation and Access to AIS Gateway')
                    ->view('emails.order')
                    ->with([
                        'order' => $this->order,
                    ]);
    }
}
