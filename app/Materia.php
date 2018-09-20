<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
  
  protected $filliable = [
    'materia',
    'crn',
    'seccion',
    'horario',
    '_token',
  ];
  
  public function user()
  {
    return $this->belongsTo('User');
  }
}
