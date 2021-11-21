<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $fillable = ['name','phone','purpose','time'];
}
