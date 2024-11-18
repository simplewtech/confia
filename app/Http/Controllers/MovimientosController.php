<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovimientosRequest;
use App\Models\Movimientos;
use App\Models\Personas;
use App\Models\TipoMovimientos;
use Illuminate\Http\Request;

class MovimientosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Movimientos::oldest('id')->get();
        return view('movimientos.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipo_movimientos = TipoMovimientos::get()->pluck('nombre', 'id');
        $personas = Personas::get()->pluck('nombre', 'id');
        return view('movimientos.form', compact('tipo_movimientos', 'personas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MovimientosRequest $request)
    {
        Movimientos::create($request->validated());
        return redirect()->route('movimiento.index')->with('mensaje', 'Registro creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Movimientos $movimientos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movimientos $movimientos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movimientos $movimientos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $registro = Movimientos::findOrFail($id);
        $registro->delete();
        return redirect()->route('movimientos.index')->with('mensaje','Este registro fue eliminado con exito');
    }
}
