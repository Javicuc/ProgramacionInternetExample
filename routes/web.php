<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
Route::resource('alumnos', 'AlumnoController', [ 'except' => ['edit', 'create']]);
Route::resource('users', 'UserController', [ 'except' => ['edit', 'create']]);
Route::resource('materias', 'MateriaController', [ 'except' => ['edit', 'create']]);
Route::resource('empleados', 'EmpleadosController', [ 'except' => ['edit', 'create']]);
Route::resource('dependencias', 'DependenciaController', [ 'except' => ['edit', 'create']]);
*/

Route::resource('materias', 'MateriaController');

Route::get('/inicio', function(){
  return view('bienvenida');
});
