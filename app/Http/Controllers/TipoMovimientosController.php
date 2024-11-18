<?php

namespace App\Http\Controllers;

use App\Http\Requests\TipoPersonasRequest;
use App\Models\TipoMovimientos;
use Illuminate\Http\Request;

class TipoMovimientosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = TipoMovimientos::oldest('id')->get();
        return view('tipo-movimientos.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tipo-movimientos.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TipoPersonasRequest $request)
    {
        TipoMovimientos::create($request->validated());
        return redirect()->route('tipo-movimiento.index')->with('mensaje', 'Registro creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(TipoMovimientos $tipoMovimientos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipoMovimientos $tipoMovimientos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TipoMovimientos $tipoMovimientos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoMovimientos $id)
    {
        $registro = TipoMovimientos::findOrFail($id);
        $registro->delete();
        return redirect()->route('tpo-movimientos.index')->with('mensaje','Este registro fue eliminado con exito');
    }
}
