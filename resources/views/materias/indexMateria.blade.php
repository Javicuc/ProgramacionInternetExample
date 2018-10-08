@extends('layouts.tema')

@section('titulo_contenido') Listado de Materias @endsection
@section('subtitulo_contenido') Materias Registradas en BD @endsection
@section('ruta_ref') <a href="{{ url('/materias') }}">Materias</a> @endsection

@section('contenido')
<a href="{{ route('materias.create')}}" class="btn btn-success">Nueva Materia</a>
@if($materias->count() == 0)
<div class="alert-warning">
  No Tienes Materias Registradas
</div>
@endif
<table class="table">
  <thead>
    <th>ID</th>
    <th>Materia</th>
    <th>CRN</th>
    <th>SALÓN</th>
    <th>SECCION</th>
    <th>HORARIO</th>
    <th>USUARIO</th>
    <th>ULTIMA ACTUALIZACIÓN</th>
  </thead>
  <tbody>
    @foreach($materias as $materia)
    <tr>
      <td>
        <a class="btn btn-sm btn-info" href="{{ route('materias.show', $materia->id) }}">{{ $materia->id }}</a>
      </td>
      <td>{{ $materia->materia }}</td>
      <td>{{ $materia->crn }}</td>
      <td>{{ $materia->salon }}</td>
      <td>{{ $materia->seccion }}</td>
      <td>{{ $materia->horario }}</td>
      <td>{{ $materia->user->name }}</td>
      <td>{{ $materia->updated_at }}</td>
    </tr>
    @endforeach
  </tbody>
</table>  
@endsection