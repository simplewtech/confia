<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovimientoDetalleRequest;
use App\Models\Movimiento;
use App\Models\MovimientoDetalle;
use App\Models\Producto;
use Illuminate\Http\Request;

class MovimientoDetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = MovimientoDetalle::oldest('id')->get();
        return view('movimiento-detalle.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $movimiento = Movimiento::get()->pluck('nombre', 'id');
        $producto = Producto::get()->pluck('nombre', 'id');
        return view('movimiento-detalle.form', compact('movimiento', 'producto'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MovimientoDetalleRequest $request)
    {
        MovimientoDetalle::create($request->validated());
        return redirect()->route('movimiento-detalle.index')->with('mensaje', 'Registro creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(MovimientoDetalle $movimientoDetalle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MovimientoDetalle $movimientoDetalle)
    {
        $movimiento = Movimiento::get()->pluck('nombre', 'id');
        $producto = Producto::get()->pluck('nombre', 'id');
        return view('movimiento-detalle.editar', compact('movimientoDetalle', 'movimiento', 'producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MovimientoDetalleRequest $request, MovimientoDetalle $movimientoDetalle)
    {
        $movimientoDetalle->update($request->validated());
        return redirect()->route('movimiento-detalle.index')->with('mensaje', 'Registro actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MovimientoDetalle $movimientoDetalle)
    {
        $movimientoDetalle->delete();
        return redirect()->route('movimiento-detalle.index')->with('mensaje','Este registro fue eliminado con exito');
    }
}
