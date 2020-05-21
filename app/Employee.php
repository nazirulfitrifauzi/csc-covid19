<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
     protected $table = 'employee';
    protected $fillable = ['id','name','nric','department','temperature','quest1','quest2','quest3','quest4','quest5','quest6','quest7','quest8','quest9','quest10'];
}
