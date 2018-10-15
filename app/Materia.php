<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
  
  protected $fillable = [
    'materia',
    'crn',
    'seccion',
    'horario',
    'salon',
  ];
  
  public function user()
  {
    //Ambas líneas son equivalentes 'App\ModelName' == ModelName::class
    //return $this->belongsTo('App\User');
    return $this->belongsTo(User::class);
  }
  
  public function alumnos()
  {
    return $this->belongsToMany(Alumno::class);
  }
}
