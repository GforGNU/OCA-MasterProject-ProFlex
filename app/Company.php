<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        "company_name", "profile_description", "user_id","establishment_date","company_website","business_stream",
    ];
    //
    public function jobPost(){
        return $this->hasMany('App\JobPost' );
    }

    public function user(){
        return $this->belongsTo('App\User' , 'user_id');
    }
}
