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
        $this->hasMany(Delivery::class);
    }

    public function comments(){
        $this->hasMany(Comment::class);
    }

    public function fanpages(){
        $this->hasMany(Fanpage::class);
    }

    public function orders(){
        $this->hasMany(Order::class);
    }

    public function promotions(){
        $this->hasMany(Promotion::class);
    }



}
