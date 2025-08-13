<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'total_price',
        'address',
        'order_details',  // added
        'status',
        'payment_status',
    ];

    // Add relation to user (optional)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // app/Models/Order.php
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
    
}
