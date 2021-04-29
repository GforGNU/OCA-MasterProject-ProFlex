<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'email', 'password', 'user_type_id',
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

    public function userType(){
        return $this->hasOne('App\UserType');
    }

    public function posts(){
        return $this->hasMany('App\JobPost', 'posted_by_id');
    }

    public function company(){
        return $this->hasOne('App\Company' );
    }


    public function seeker(){
        return $this->hasOne('App\SeekerProfile');
    }

    public function activityuser(){
        return $this->hasMany('App\JobPostActivity' , 'user_id');
    }


    public function postact(){
        return $this->hasMany('App\JobPost' , 'job_post_id');
    }

}
