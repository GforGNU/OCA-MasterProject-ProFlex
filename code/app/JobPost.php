<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    //
    protected $fillable = [
        "posted_by_id", "job_type_id", "company_id","created_date","job_name","job_description","is_active",
    ];

    // public $incrementing = true;
    // public $primaryKey = 'id';

    public function user(){
        return $this->belongsTo('App\User', 'posted_by_id');
    }

    public function type(){
        return $this->belongsTo('App\JobType');
    }

    public function company(){
        return $this->hasOne('App\Company' , 'company_id');
    }
    
    public function activity(){
        return $this->hasMany('App\JobPostActivity', 'job_post_id' );
    }
    // public function skills(){
    //     return $this->belongsToMany('App\JobPostSkillSet', 'job_post_id');
    // }
}
