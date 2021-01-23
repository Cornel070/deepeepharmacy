<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function buyer()
    {
    	return $this->belongsTo(Buyer::class);
    }

    public function items()
    {
    	return $this->hasMany(OrderItem::class);
    }
}
