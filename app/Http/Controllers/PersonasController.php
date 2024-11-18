<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonasRequest;
use App\Models\Personas;
use App\Models\TipoPersonas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Personas::oldest('id')->get();
        return view('personas.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipo_personas = TipoPersonas::get()->pluck('nombre', 'id');
        return view('personas.form', compact('tipo_personas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonasRequest $request)
    {
        Personas::create($request->validated());
        return redirect()->route('persona.index')->with('mensaje', 'Registro creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Personas $personas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personas $personas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personas $personas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personas $id)
    {
        $registro = Personas::findOrFail($id);
        $registro->delete();
        return redirect()->route('personas.index')->with('mensaje','Este registro fue eliminado con exito');
    }
}
