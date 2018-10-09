<?php

namespace App;

use App\User;
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
    //Ambas líneas son equivalentes 'App\ModelName' == ModelName::class
    //return $this->belongsTo('App\User');
    return $this->belongsTo(User::class);
  }

}
