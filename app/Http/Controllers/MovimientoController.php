<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovimientoRequest;
use App\Models\Movimiento;
use App\Models\MovimientoDetalle;
use App\Models\Persona;
use App\Models\TipoMovimiento;
use Database\Seeders\movimientoSeeder;
use Illuminate\Http\Request;

class MovimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Movimiento::oldest('id')->get();
        return view('movimiento.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipo_movimiento = TipoMovimiento::get()->pluck('nombre', 'id');
        $persona = Persona::get()->pluck('nombre', 'id');
        return view('movimiento.form', compact('tipo_movimiento', 'persona'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MovimientoRequest $request)
    {
        Movimiento::create($request->validated());
        return redirect()->route('movimiento.index')->with('mensaje', 'Registro creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Movimiento $movimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movimiento $movimiento)
    {
        $tipo_movimiento = TipoMovimiento::get()->pluck('nombre', 'id');
        $persona = Persona::get()->pluck('nombre', 'id');
        return view('movimiento.editar', compact('movimiento', 'tipo_movimiento', 'persona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MovimientoRequest $request, Movimiento $movimiento)
    {
        $movimiento->update($request->validated());
        return redirect()->route('movimiento.index')->with('mensaje', 'Registro actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movimiento $movimiento)
    {
        $movimiento->delete();
        return redirect()->route('movimiento.index')->with('mensaje','Este registro fue eliminado con exito');
    }
}
