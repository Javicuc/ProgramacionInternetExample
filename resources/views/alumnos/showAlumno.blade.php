@extends('layouts.tema') @section('contenido')
<div class="row">
  <div class="col-md-6">
    <div class="tile">
      <div class="tile-title-w-btn">
        <h3 class="title">{{$alumno->nombre}}</h3>
        
        <div class="btn-group">
          <a class="btn btn-primary" href="{{ route('alumnos.create') }}"><i class="fa fa-lg fa-plus"></i></a>
          <a class="btn btn-primary" href="{{ route('alumnos.edit', $alumno) }}"><i class="fa fa-lg fa-edit"></i></a>
          {!! Form::open(['route' => ['alumnos.destroy', $alumno->id], 'method' => 'Delete']) !!}
          {{ Form::button('<i class="fa fa-lg fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-primary'] )  }}
          {!! Form::close() !!}
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
        </table>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="tile">
      <div class="tile-title-w-btn">
        <h3 class="title">Agregar Materias</h3>
      </div>
      <div class="tile-body">
        <p>Agregar materias al usuario seleccionado</p>
        <h4>Materias</h4>
        {!! Form::open(['route' => ['alumno.materia.store', $alumno->id]]) !!}
        <div class="form-group">
          <select class="form-control" name="materias">
            @foreach($materias as $materia)
            <option value="{{ $materia->id }}">{{ $materia->materia }}</option>
            @endforeach
          </select>
          <br>
          {!! Form::submit('Agregar Materia', ['class' => 'btn btn-primary btn-succesful']) !!}
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  
  <div class="col-md-12">
    <div class="tile">
      <h3 class="tile-title">Materias del Alumno</h3>
      <table class="table table-sm">
        <thead>
          <tr>
            <th>ID</th>
            <th>Materia</th>
            <th>Acción</th>
          </tr>
        </thead>
        <tbody>
          @foreach($alumno->materias as $materia)
          {!! Form::open(['route' => ['alumno.materia.destroy', $alumno->id, $materia->id], 'method' => 'Delete']) !!}
          <tr>
            <td> {{ $materia->id }} </td>
            <td> {{ $materia->materia}} </td>>
            <td> {!! Form::submit('Eliminar', ['class' => 'btn btn-sm btn-danger']) !!} </td>
          </tr>
          {!! Form::close() !!}
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

</div>
@endsection