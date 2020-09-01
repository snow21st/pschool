<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
     protected $fillable = [
      'year','startdate','enddate'
    ];

    public function grades(){
   			return $this->belongsToMany('App\Grades','academicsgrades','academic_id','grade_id')
   			->withTimestamps();
   		}
}
