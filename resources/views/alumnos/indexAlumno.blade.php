@extends('layouts.tema')

@section('titulo_contenido') Listado de Alumnos @endsection
@section('subtitulo_contenido') Alumnos Registrados en BD @endsection
@section('ruta_ref') <a href="{{ url('/alumnos') }}">Alumnos</a> @endsection

@section('contenido')
<a href="{{ route('alumnos.create')}}" class="btn btn-success">Nuevo Alumno</a>
@if($alumnos->count() == 0)
<div class="alert-warning">
  No Hay Alumnos Registrados
</div>
@endif
<table class="table">
  <thead>
    <th>ID</th>
    <th>Nombre</th>
    <th>CÓDIGO</th>
    <th>CARRERA</th>
  </thead>
  <tbody>
    @foreach($alumnos as $alumno)
    <tr>
      <td>
        <a class="btn btn-sm btn-info" href="{{ route('alumnos.show', $alumno->id) }}">{{ $alumno->id }}</a>
      </td>
      <td>{{ $alumno->nombre }}</td>
      <td>{{ $alumno->codigo }}</td>
      <td>{{ $alumno->carrera }}</td>
    </tr>
    @endforeach
  </tbody>
</table>  
@endsection