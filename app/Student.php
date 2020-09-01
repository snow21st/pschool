<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
     protected $fillable = [
      'name','dob','nrc','fathername','mothername','address','phone'
    ];
}
