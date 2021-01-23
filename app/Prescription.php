<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    public function items()
    {
    	return $this->hasMany(Item::class);
    }
}
