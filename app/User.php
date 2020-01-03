<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function followers(){
        return $this->belongsToMany(User::class,'followers','user_id','follower_id');
    }
    public function followings(){
        return $this->belongsToMany(User::class,'followers','follower_id','user_id');
    }

    public function rating(){
        return $this->hasMany(Rating::class,'user_id','id');
    }
    public function rater(){
        return $this->hasMany(Rating::class,'rater_id','id');
    }
}
