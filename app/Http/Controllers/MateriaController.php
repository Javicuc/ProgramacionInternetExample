<?php

namespace App\Http\Controllers;

use App\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $materias = Materia::all();
      return view('materias.indexMateria', compact('materias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materias.formMateria');
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
          'materia' => 'required|min:5',
          'crn' => 'required|numeric', 
          'seccion' => 'required|min:3|max:5',
          'horario' => 'required',
          'salon' => 'required',
        );
      
        $this->validate($request, $rules);
        
        $data = $request->all();
        $materia = Materia::create($data);
        return redirect()->route('materias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show(Materia $materia)
    {
        $materia = Materia::find($materia->id);
        return view('materias.showMateria', compact('materia'));
        //->with(['id' => $id, 'nombre' => $nombre]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function edit(Materia $materia)
    {
        
        return view('materias.formMateria', compact('materia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materia $materia)
    {
        $rules = array(
          'materia' => 'required|min:5',
          'crn' => 'required|numeric', 
          'seccion' => 'required|min:3|max:5',
          'horario' => 'required',
          'salon' => 'required',
        );
      
        $this->validate($request, $rules);
      
        $materia->materia = $request->materia;
        $materia->crn = $request->crn;
        $materia->seccion = $request->seccion;
        $materia->horario = $request->horario;
        $materia->salon = $request->horario;
        $materia->save();
      
        return view('materias.showMateria', compact('materia'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materia $materia)
    {
        $materia->delete();
        return redirect()->route('materias.index');
    }
}
