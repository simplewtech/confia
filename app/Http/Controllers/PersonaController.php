<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonaRequest;
use App\Models\Persona;
use App\Models\TipoPersona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Persona::oldest('id')->get();
        return view('persona.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipo_persona = TipoPersona::get()->pluck('nombre', 'id');
        return view('persona.form', compact('tipo_persona'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonaRequest $request)
    {
        Persona::create($request->validated());
        return redirect()->route('persona.index')->with('mensaje', 'Registro creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Persona $persona)
    {
        $tipo_persona = TipoPersona::get()->pluck('nombre', 'id');
        return view('persona.editar', compact('persona','tipo_persona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PersonaRequest $request, Persona $persona)
    {
        dd($persona);
        $persona->update($request->validated());
        return redirect()->route('persona.index')->with('mensaje', 'Registro actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persona $persona)
    {
        $persona->delete();
        return redirect()->route('persona.index')->with('mensaje','Este registro fue eliminado con exito');
    }
}
