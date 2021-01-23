<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	protected $fillable = ['drug_id','prescription_id','description'];
	
    public function drug()
    {
    	return $this->belongsTo(Drug::class);
    }
}
