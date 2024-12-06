<?php

namespace App\Http\Controllers;

use App\Http\Requests\UbicacionRequest;
use App\Models\Ubicacion;
use Illuminate\Http\Request;

class UbicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Ubicacion::oldest("id")->get();
        return view('ubicacion.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ubicacion.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UbicacionRequest $request)
    {
        Ubicacion::create($request->validated());
        return redirect()
            ->route('ubicacion.index')
            ->with('mensaje', 'Registro creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ubicacion $ubicacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ubicacion $ubicacion)
    {
        return view('ubicacion.editar', compact('ubicacion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UbicacionRequest $request, Ubicacion $ubicacion)
    {
        $ubicacion->update($request->validated());
        return redirect()->route('ubicacion.index')->with('mensaje', 'Registro actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ubicacion $ubicacion)
    {
        $ubicacion->delete();
        return redirect()->route('ubicacion.index')->with('mensaje', 'Registro eliminado con Éxito');
    }
}
