<?php

namespace App\Http\Controllers;

use App\Http\Requests\InventariosRequest;
use App\Models\Inventarios;
use App\Models\Productos;
use Illuminate\Http\Request;

class InventariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Inventarios::oldest('id')->get();
        return view('inventarios.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productos = Productos::get()->pluck('nombre', 'id');
        return view('inventarios.form', compact('productos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InventariosRequest $request)
    {
        Inventarios::create($request->validated());
        return redirect()->route('inventarios.store')->with('mensaje', 'Registro creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventarios $inventarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventarios $inventarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inventarios $inventarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $registro = Inventarios::findOrFail($id);
        $registro->delete();
        return redirect()->route('inventarios.index')->with('mensaje','Este registro fue eliminado con exito');
    }
}
