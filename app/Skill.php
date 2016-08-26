<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
     protected $primaryKey = 'sid';
     protected $table = 'skills';
     protected $fillable = ['category', 'skill', 'description'];
}
