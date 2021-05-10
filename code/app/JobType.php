<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobType extends Model
{
    //
    public function job(){
        return $this->hasMany('App\JobPost', "job_type_id");
    }
}
