<?php

namespace App\Http\Controllers;

use App\Http\Requests\TipoPersonaRequest;
use App\Models\TipoPersona;
use Illuminate\Http\Request;

class TipoPersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = TipoPersona::oldest('id')->get();
        return view('tipo-persona.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tipo-persona.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TipoPersonaRequest $request)
    {
        TipoPersona::create($request->validated());
        return redirect()->route('tipo-persona.index')->with('mensaje', 'Registro creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(TipoPersona $tipoPersona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipoPersona $tipoPersona)
    {
        return view('tipo-persona.editar', compact('tipoPersona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TipoPersonaRequest $request, TipoPersona $tipoPersona)
    {
        $tipoPersona->update($request->validated());
        return redirect()->route('tipo-persona.index')->with('mensaje', 'Registro actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoPersona $tipoPersona)
    {
        $tipoPersona->delete();
        return redirect()->route('tipo-persona.index')->with('mensaje','Este registro fue eliminado con exito');
    }
}
