@extends('layouts.tema')

@section('contenido')

<h1>
  Editar Materia
</h1>

<form action="/materias/{$id}" method="POST" >
  <label for="materia">Materia</label>
  <input type="text" name="materia" required placeholder="Ingresa Materia"><br>
  <input type="submit" value="Enviar">
</form>

@endsection