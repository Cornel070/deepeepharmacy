<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    protected $fillable = [
    	'name','price','description','how_to_take',
    	'avoided','side_effects','dosage','in_stock'
    ];
}
