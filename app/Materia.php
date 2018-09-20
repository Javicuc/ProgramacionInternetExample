<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
  
  protected $fillable = [
    'materia',
    'crn',
    'seccion',
    'horario',
  ];
  
  public function user()
  {
    return $this->belongsTo('User');
  }
}
