<?php

namespace App\Http\Controllers;

use App\Http\Requests\InventarioRequest;
use App\Models\Inventario;
use App\Models\Producto;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Inventario::oldest('id')->get();
        return view('inventario.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $producto = Producto::get()->pluck('nombre', 'id');
        return view('inventario.form', compact('producto'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InventarioRequest $request)
    {
        Inventario::create($request->validated());
        return redirect()
            ->route('inventario.index')
            ->with('mensaje', 'Registro creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventario $inventario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventario $inventario)
    {
        $producto = Producto::get()->pluck('nombre', 'id');
        return view('inventario.editar', compact('inventario','producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InventarioRequest $request, Inventario $inventario)
    {
        $inventario->update($request->validated());
        return redirect()->route('inventario.index')->with('mensaje', 'Registro actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventario $inventario)
    {
        $inventario->delete();
        return redirect()->route('inventario.index')->with('mensaje','Este registro fue eliminado con exito');
    }
}
