@extends('layouts.tema') 
@section('contenido')

<div class="clearfix"></div>
<div class="col-md-6">
  <div class="tile">
    <div class="tile-title-w-btn">
      <h3 class="title">{{$materia->materia}}</h3>
      <div class="btn-group">
        <a class="btn btn-primary" href="{{ route('materias.create') }}"><i class="fa fa-lg fa-plus"></i></a>
        <a class="btn btn-primary" href="{{ route('materias.edit', $materia) }}"><i class="fa fa-lg fa-edit"></i></a>
        <div>
          <form action="{{ route('materias.destroy', $materia->id) }}" method="POST">
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
          <th>CRN</th>
          <th>SALÓN</th>
          <th>SECCION</th>
          <th>HORARIO</th>
          <th>ULTIMA ACTUALIZACIÓN</th>
        </thead>
        <tbody>
          <tr>
            <td>{{ $materia->crn }}</td>
            <td>{{ $materia->salon }}</td>
            <td>{{ $materia->seccion}}</td>
            <td>{{ $materia->horario}}</td>
            <td>{{ $materia->updated_at}}</td>
          </tr>
        </tbody>
    </div>
  </div>
</div>

@endsection