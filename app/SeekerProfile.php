<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeekerProfile extends Model
{
    //
    protected $fillable = [
        'about', 'cv', 'first_name', 'last_name', 'availability', 'tagline', 'location','user_id', 
    ];
   
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function activity(){
        return $this->hasMany('App\JobPostActivity');
    }
}
