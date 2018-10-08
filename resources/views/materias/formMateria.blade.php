@extends('layouts.tema') 
@section('titulo_contenido') Registrar Materia @endsection 
@section('subtitulo_contenido') Registrar Materia en BD @endsection 
@section('ruta_ref') <a href="{{ url('/materias') }}">Materias</a> @endsection 
@section('contenido')

<div class="row">
  <div class="col-md-12">
    <div class="tile">
      
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
        </div>
      @endif
      
      <h3 class="tile-title">Rellene los campos para Materia</h3>
      <div class="tile-body">
        @if(isset($materia))
            <form action="{{ route('materias.update', $materia->id) }}" method="POST">
            <input type="hidden" , name="_method" value="PATCH"> 
          @else
            <form action="{{ route('materias.store') }}" method="POST">
            @endif {{ csrf_field() }}
            <div class="form-group">
              <label for="materia" class="control-label">Nombre</label>
              <input name="materia" class="form-control" type="text" value="{{ isset($materia) ? $materia->materia : '' }}" required placeholder="Ingresa nombre de la materia">
            </div>
            <div class="form-group">
              <label for="crn" class="control-label">CRN</label>
              <input name="crn" class="form-control" type="text" value="{{ isset($materia) ? $materia->crn : ''}}" required placeholder="Ingresa CRN de la materia">
            </div>
            <div class="form-group"> 
              <label for="seccion" class="control-label">Sección</label>
              <input name="seccion" class="form-control" type="text" value="{{ isset($materia) ? $materia->seccion : ''}}" required placeholder="Ingresa sección de la materia">
            </div>
            <div class="form-group">
              <label for="horario" class="control-label">Horario</label>
              <input name="horario" class="form-control" type="text" value="{{ isset($materia) ? $materia->horario : ''}}" required placeholder="Ingresa horario de la materia">
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