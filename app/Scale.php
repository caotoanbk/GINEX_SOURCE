<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scale extends Model
{
    protected $fillable = ['ScaleName'];
    public $timestamps = false;
}
