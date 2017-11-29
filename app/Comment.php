<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

	protected $fillable = [
				'user_id', 'delivery_id', 'comment', 'score',
	];

    public function user(){
    	$this->belongsTo(User::class);
    }

    public function delivery(){
    	$this->belongsTo(Delivery::class);
    }
}
