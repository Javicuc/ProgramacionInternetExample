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
    <th>Nombre</th>
    <th>CÓDIGO</th>
    <th>CARRERA</th>
    <th>Ultima Actualización</th>
  </thead>
  <tbody>
    @foreach($alumnos as $alumno)
    <tr>
      <td>{{ $alumno->nombre }}</td>
      <td>{{ $alumno->codigo }}</td>
      <td>{{ $alumno->carrera }}</td>
      <td>{{ $alumno->updated_at }}</td>
    </tr>
    @endforeach
  </tbody>
</table>  
@endsection