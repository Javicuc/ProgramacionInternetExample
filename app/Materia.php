<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
  
  protected $fillable = [
    'user_id',
    'materia',
    'crn',
    'seccion',
    'horario',
    'salon',
  ];
  
  public function user()
  {
    return $this->belongsTo('User');
  }
}
