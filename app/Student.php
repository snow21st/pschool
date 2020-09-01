<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
     protected $fillable = [
      'userid','dob','nrc','fathername','mothername','address','phone'
    ];
}
