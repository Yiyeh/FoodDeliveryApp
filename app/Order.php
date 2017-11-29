<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

	protected $fillable = [
				'user_id', 'delivery_id', 'body', 'phone', 'adress', 'ready',
	];

    public function user(){
    	$this->belongsTo(User::class);
    }

    public function delivery(){
    	$this->belongsTo(Delivery::class);
    }
}
