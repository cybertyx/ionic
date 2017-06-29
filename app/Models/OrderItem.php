<?php

namespace DeliveryQuick\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'product_id',
        'order_id',
        'price',
        'qtd',
    ];
    
    public function order() {
        return $this->belongsTo(Order::class);
    }
    
    public function products() {
        return $this->belongsTo(Products::class);
    }

}
