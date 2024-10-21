<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // Define the fillable properties
    protected $fillable = [
        'order_id',
        'candidate_name',
        'candidate_email',
        'requestor',
        'status',
        'created_by',
    ];

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'order_id', 'order_id');
    }
}
