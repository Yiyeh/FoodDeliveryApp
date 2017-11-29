<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = [
				'name', 'slug',
	];


    public function deliveries(){
    	$this->belongsToMany(Delivery::class);
    }
}
