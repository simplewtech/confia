<?php

namespace App\Http\Controllers;

use App\Http\Requests\UbicacionesRequest;
use App\Models\Ubicaciones;
use Illuminate\Http\Request;

class UbicacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Ubicaciones::oldest('id')->get();
        return view('ubicaciones.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ubicaciones.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UbicacionesRequest $request)
    {
        Ubicaciones::create($request->validated());
        return redirect()->route('ubicacion.index')->with('mensaje', 'Registro creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ubicaciones $ubicaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ubicaciones $ubicaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ubicaciones $ubicaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $registro = Ubicaciones::findOrFail($id);
        $registro->delete();
        return redirect()->route('ubicaciones.index')->with('mensaje','Este registro fue eliminado con exito');
    }
}
