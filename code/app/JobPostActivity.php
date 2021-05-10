<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class JobPostActivity extends Model
{
    //
    protected $fillable = [
        "user_id", "job_post_id", "is_confirmed","apply_date","file",
    ];

    public function jobPost(){
        return $this->belongsTo('App\JobPost', 'id');
    }
 
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function seeker(){
        return $this->belongsToMany('App\SeekerProfile');
    }
}
