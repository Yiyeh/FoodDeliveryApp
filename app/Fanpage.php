<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fanpage extends Model
{

	protected $fillable = [
				'user_id', 'delivery_id', 'url',
	];

    public function user(){
    	$this->belongsTo(User::class);
    }

    public function delivery(){
    	$this->belongsTo(Delivery::class);
    }
}
