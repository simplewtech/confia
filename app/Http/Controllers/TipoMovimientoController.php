<?php

namespace App\Http\Controllers;

use App\Http\Requests\TipoMovimientoRequest;
use App\Models\TipoMovimiento;
use Illuminate\Http\Request;

class TipoMovimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = TipoMovimiento::oldest('id')->get();
        return view('tipo-movimiento.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tipo-movimiento.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TipoMovimientoRequest $request)
    {
        TipoMovimiento::create($request->validated());
        return redirect()->route('tipo-movimiento.index')->with('mensaje', 'Registro creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(TipoMovimiento $tipoMovimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipoMovimiento $tipoMovimiento)
    {
        return view('tipo-movimiento.editar', compact('tipoMovimiento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TipoMovimientoRequest $request, TipoMovimiento $tipoMovimiento)
    {
        $tipoMovimiento->update($request->validated());
        return redirect()->route('tipo-movimiento.index')->with('mensaje', 'Registro actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoMovimiento $tipoMovimiento)
    {
        $tipoMovimiento->delete();
        return redirect()->route('tipo-movimiento.index')->with('mensaje','Este registro fue eliminado con exito');
    }
}
