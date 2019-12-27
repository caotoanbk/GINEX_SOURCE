<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    protected $fillable = ['IndustryName'];
    public $timestamps = false;
}
