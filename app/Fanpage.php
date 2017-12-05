<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fanpage extends Model
{

	protected $fillable = [
				'user_id', 'delivery_id', 'url',
	];

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function delivery(){
    	return $this->belongsTo(Delivery::class);
    }
}
