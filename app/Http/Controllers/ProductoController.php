<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductoRequest;
use App\Models\Familia;
use App\Models\Producto;
use App\Models\Ubicacion;
use Illuminate\Http\Request;
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Producto::oldest('id')->get();
        return view('producto.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $familia = Familia::get()->pluck('nombre', 'id');
        $ubicacion = Ubicacion::get()->pluck('nombre', 'id');
        return view('producto.form', compact('familia', 'ubicacion'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductoRequest $request)
    {
        Producto::create($request->validated());
        return redirect()->route('producto.store')->with('mensaje', 'Registro creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        $familia = Familia::get()->pluck('nombre', 'id');
        $ubicacion = Ubicacion::get()->pluck('nombre', 'id');
        return view('producto.editar', compact('producto', 'familia', 'ubicacion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductoRequest $request, Producto $producto)
    {
        $producto->update($request->validated());
        return redirect()->route('producto.index')->with('mensaje', 'Registro actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('producto.index')->with('mensaje','Este registro fue eliminado con exito');
    }
}
