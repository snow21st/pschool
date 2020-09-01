<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
     protected $fillable = [
      'name','grade_id'
    ];

       public function timetable(){
    	return $this->hasMany('App\Timetable');
    }
}
