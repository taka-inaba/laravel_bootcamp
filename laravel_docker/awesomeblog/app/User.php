<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts(){
        return $this->hasMany('App\User', 'user_id', 'id');
    }
    public function follows(){
        return $this->hasMany('App\Follow', 'follow_id', 'id');
    }

    public function following(){
       return $this->belongsToMany('App\User', 'follows', 'user_id', 'follow_id');
    }

    public function followers(){
       return $this->belongsToMany('App\User', 'follows', 'follow_id', 'user_id');
    }

    public function is_following($followed_id){
        if ( $this -> following()->where('follow_id', $followed_id)->count() > 0){
            return true;
        }else{
            return false;
        }
    }

}
