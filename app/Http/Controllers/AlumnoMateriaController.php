<?php

namespace App\Http\Controllers;

use App\Materia;
use App\Alumno;
use Illuminate\Http\Request;

class AlumnoMateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function index(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function create(Alumno $alumno)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Alumno $alumno)
    {
        $alumno->materias()->attach($request->materias);
        return redirect()->route('alumnos.show', $alumno->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno, Materia $materium)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno, Materia $materium)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumno  $alumno
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno, Materia $materium)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumno  $alumno
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno, Materia $materium)
    {
        $alumno->materias()->detach($materium);
        return redirect()->route('alumnos.show', $alumno->id);
    }
}
