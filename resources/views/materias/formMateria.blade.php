@extends('layouts.tema') 

@section('titulo_contenido') Registrar Materia @endsection
@section('subtitulo_contenido') Registrar Materia en BD @endsection
@section('ruta_ref') <a href="{{ url('/materias') }}">Materias</a> @endsection

@section('contenido')
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <h3 class="tile-title">Rellene los campos para Materia</h3>
      <div class="tile-body">
        <form action="{{ route('materias.store') }}" method="POST">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="materia" class="control-label">Nombre</label>
            <input name="materia" class="form-control" type="text" required placeholder="Ingresa nombre de la materia">
          </div>
          <div class="form-group">
            <label for="crn" class="control-label">CRN</label>
            <input name="crn" class="form-control" type="text" required placeholder="Ingresa CRN de la materia">
          </div>
          <div class="form-group">
            <label for="seccion" class="control-label">Sección</label>
            <input name="seccion" class="form-control" type="text" required placeholder="Ingresa sección de la materia">
          </div>
          <div class="form-group">
            <label for="horario" class="control-label">Horario</label>
            <input name="horario" class="form-control" type="text" required placeholder="Ingresa horario de la materia">
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