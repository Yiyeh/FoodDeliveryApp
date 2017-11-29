<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
	protected $fillable = [
		'user_id', 'category_id', 'name', 'slug', 'short', 'body', 'phone', 'sector', 'logo', 'fbPage', 'commune', 'city', 'published',
	];

	public function user(){
		return $this->belongsTo(User::class);
	}

	public function comments(){
		return $this->hasMany(Comment::class);
	}

	public function fanpages(){
		return $this->hasMany(Fanpage::class);
	}

	public function orders(){
		return $this->hasMany(Order::class);
	}

	public function promotions(){
		return $this->hasMany(Promotion::class);
	}

	public function recommends(){
		return $this->hasMany(Recommends::class);
	}

    public function categories(){
    	return $this->belongsToMany(Category::class);
    }
}
