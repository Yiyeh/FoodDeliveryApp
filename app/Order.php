<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

	protected $fillable = [
				'user_id', 'delivery_id', 'body', 'phone', 'adress', 'ready',
	];

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function delivery(){
    	return $this->belongsTo(Delivery::class);
    }

    public function ordercomments(){
    	return $this->hasMany(Ordercomment::class);
    }
}
