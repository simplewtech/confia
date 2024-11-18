<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovimientosDetallesRequest;
use App\Models\Movimientos;
use App\Models\MovimientosDetalles;
use App\Models\Productos;
use Illuminate\Http\Request;

class MovimientosDetallesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = MovimientosDetalles::oldest('id')->get();
        return view('movimientos-detalles.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $movimientos = Movimientos::get()->pluck('nombre', 'id');
        $productos = Productos::get()->pluck('nombre', 'id');
        return view('movimientos-detalles.form', compact('movimientos', 'productos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MovimientosDetallesRequest $request)
    {
        MovimientosDetalles::create($request->validated());
        return redirect()->route('movimientos-detalles.index')->with('mensaje', 'Registro creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(MovimientosDetalles $movimientosDetalles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MovimientosDetalles $movimientosDetalles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MovimientosDetalles $movimientosDetalles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MovimientosDetalles $id)
    {
        $registro = MovimientosDetalles::findOrFail($id);
        $registro->delete();
        return redirect()->route('movimientos-detalles.index')->with('mensaje','Este registro fue eliminado con exito');
    }
}
