<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'product_id',
        'user_name',
        'user_email',
        'user_phone',
        'quantity',
        'total_price',
        'status',
        'shipping_address',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
