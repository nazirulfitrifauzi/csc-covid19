<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temp extends Model
{
    protected $table = 'tempcheck';
    protected $fillable = ['id','name','temperature'];
}
