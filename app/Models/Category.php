<?php

namespace DeliveryQuick\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
      'name'  
    ];
    
    public function produts() {
        return $this->hasMany(Products::class);
    }

}
