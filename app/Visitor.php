<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
     protected $table = 'visitor';
    protected $fillable = ['id','name','designation','company','visitingwho','quest1','quest2','quest3','quest4','quest5','quest6'];
}
