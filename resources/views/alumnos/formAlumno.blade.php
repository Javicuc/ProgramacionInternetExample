@extends('layouts.tema') 

@section('titulo_contenido') Registrar Alumno @endsection
@section('subtitulo_contenido') Registrar Alumno en BD @endsection
@section('ruta_ref') <a href="{{ url('/alumnos') }}">Alumnos</a> @endsection

@section('contenido')
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <h3 class="tile-title">Rellene los Campos para Alumno</h3>
      <div class="tile-body">
        <form action="{{ route('alumnos.store') }}" method="POST">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="nombre" class="control-label">Nombre</label>
            <input name="nombre" class="form-control" type="text" required placeholder="Ingresa nombre del alumno">
          </div>
          <div class="form-group">
            <label for="codigo" class="control-label">Código</label>
            <input name="codigo" class="form-control" type="text" required placeholder="Ingresa código del alumno">
          </div>
          <div class="form-group">
            <label for="carrera" class="control-label">Carrera</label>
            <input name="carrera" class="form-control" type="text" required placeholder="Ingresa carrera del alumno">
          </div>
          <div class="tile-footer">
            <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Registrar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@stop