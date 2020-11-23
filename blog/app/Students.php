<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $fillable=['student_id','student_name', 'student_department','student_address','student_email','student_mobile'];
}
