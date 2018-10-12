<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Materia;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumnos.indexAlumno', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumnos.formAlumno');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
          'nombre' => 'required',
          'codigo' => 'required|numeric', 
          'carrera' => 'required',
        );
        
        $this->validate($request, $rules);
        $data = $request->all();
        $alumno = Alumno::create($data);
        return redirect()->route('alumnos.show', $alumno);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        $alumno = Alumno::find($alumno->id);
        $materias = Materia::all();
        return view('alumnos.showAlumno', compact('alumno','materias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno)
    {
        return view('alumnos.formAlumno', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        $rules = array(
          'nombre' => 'required',
          'codigo' => 'required|numeric', 
          'carrera' => 'required',
        );
        
        $this->validate($request, $rules);  
      
        Alumno::where('id', $alumno->id)->update($request->except('_token', '_method'));
      
        return redirect()->route('alumnos.show',$alumno);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumnos.index');
    }
}
