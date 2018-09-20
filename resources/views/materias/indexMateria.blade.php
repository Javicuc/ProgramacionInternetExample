@extends('layouts.tema')

@section('contenido')
  
<h1>
  Listado de materias
</h1> 

<a href="{{ action('MateriaController@create')}}" class="btn btn-success">Nueva Materia</a>
<a href="{{ route('materias.create')}}" class="btn btn-success">Nueva Materia</a>

@if($materias->count() == 0)
<div class="alert-warning">
  No Tienes Materias Registradas
</div>
<table class="table">
  <thead>
    <th>Materia</th>
    <th>CRN</th>
    <th>SECCION</th>
    <th>HORARIO</th>
    <th>Ultima Actualización</th>
  </thead>
  <tbody>
    @foreach($materias as $materia)
    <tr>
      <td>{{ $materia->materia }}</td>
      <td>{{ $materia->crn }}</td>
      <td>{{ $materia->seccion}}</td>
      <td>{{ $materia->horario}}</td>
      <td>{{ $materia->updated_at}}</td>
    </tr>
    @endforeach
  </tbody>
</table>  
@endif
@endsection