<?php

namespace App\Http\Controllers;

use App\Http\Requests\TipoPersonasRequest;
use App\Models\TipoPersonas;
use Illuminate\Http\Request;

class TipoPersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = TipoPersonas::oldest('id')->get();
        return view('tipo-personas.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tipo-personas.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TipoPersonasRequest $request)
    {
        TipoPersonas::create($request->validated());
        return redirect()->route('tipo-persona.index')->with('mensaje', 'Registro creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $registro = TipoPersonas::findOrFail($id);
        $registro->delete();
        return redirect()->route('tipo-personas.index')->with('mensaje','Este registro fue eliminado con exito');
    }
}
