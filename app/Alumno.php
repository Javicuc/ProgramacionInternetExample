<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
  protected $fillable = [
    'nombre',
    'codigo',
    'carrera',
  ];
  
  public function materias()
  {
    return $this->belongsToMany(Materia::class);
  }
}
