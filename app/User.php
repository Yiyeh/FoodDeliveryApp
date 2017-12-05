<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function deliveries(){
        return $this->hasMany(Delivery::class);
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



}
