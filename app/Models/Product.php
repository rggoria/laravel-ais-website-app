<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'details',
        'disclaimer',
    ];

    public function prices()
    {
        return $this->hasMany(ProductPrices::class);
    }

    public $timestamps = true;
}
