<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductosRequest;
use App\Models\Familias;
use App\Models\Productos;
use App\Models\Ubicaciones;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Productos::oldest('id')->get();
        return view('productos.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $familias = Familias::get()->pluck('nombre', 'id');
        $ubicaciones = Ubicaciones::get()->pluck('nombre', 'id');
        return view('productos.form', compact('familias', 'ubicaciones'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductosRequest $request)
    {
        Productos::create($request->validated());
        return redirect()->route('productos.store')->with('mensaje', 'Registro creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Productos $productos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Productos $productos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Productos $id)
    {
        $registro = Productos::findOrFail($id);
        $registro->delete();
        return redirect()->route('productos.index')->with('mensaje','Este registro fue eliminado con exito');
    }
}
