<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillSet extends Model
{
    //
    public function postskills(){
        return $this->belongsToMany('App\JobPostSkillSet');
    }

}
