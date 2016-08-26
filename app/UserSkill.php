<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSkill extends Model
{
     protected $primaryKey = 'id';
     protected $table = 'user_skills';
     protected $fillable = ['sid', 'email', 'proficiency', 'files'];
}
