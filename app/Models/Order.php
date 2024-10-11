<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // Define the fillable properties
    protected $fillable = [
        'serial_number',
        'order_id',
        'order_date',
        'candidate_name',
        'candidate_email',
        'requestor',
        'status',
        'status_icon',
        'remarks',
    ];

    // Cast the order_date and updated_at fields to Carbon instances
    protected $casts = [
        'order_date' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
