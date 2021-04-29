<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobPostSkillSet extends Model
{
    //
    public function skills(){
        return $this->belongsToMany('App\SkillSet');
    }
    public function posts(){
        return $this->belongsToMany('App\JobPost');
    }
}
