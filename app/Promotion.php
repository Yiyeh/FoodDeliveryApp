<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{

	protected $fillable = [
				'user_id', 'delivery_id', 'title', 'photo', 'description', 'price',
	];

    public function user(){
    	$this->belongsTo(User::class);
    }

    public function delivery(){
    	$this->belongsTo(Delivery::class);
    }
}
