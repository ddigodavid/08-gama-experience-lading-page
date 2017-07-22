<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{

    protected $table = 'leads';
    protected $fillable = ['name', 'email', 'occupation', 'areaOfInterest'];

}