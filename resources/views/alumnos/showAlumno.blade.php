@extends('layouts.tema') 
@section('contenido')

<div class="clearfix"></div>
<div class="col-md-6">
  <div class="tile">
    <div class="tile-title-w-btn">
      <h3 class="title">{{$alumno->nombre}}</h3>
      <div class="btn-group">
        <a class="btn btn-primary" href="{{ route('alumnos.create') }}"><i class="fa fa-lg fa-plus"></i></a>
        <a class="btn btn-primary" href="{{ route('alumnos.edit', $alumno) }}"><i class="fa fa-lg fa-edit"></i></a>
        <div>
          <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-primary"><i class="fa fa-lg fa-trash"></i>
          </form>
       </div>
      </div>
    </div>
    <div class="tile-body">
      <table class="table">
        <thead>
          <th>NOMBRE</th>
          <th>CÓDIGO</th>
          <th>CARRERA</th>
        </thead>
        <tbody>
          <tr>
            <td>{{ $alumno->nombre }}</td>
            <td>{{ $alumno->codigo }}</td>
            <td>{{ $alumno->carrera }}</td>
          </tr>
        </tbody>
    </div>
  </div>
</div>

@endsection