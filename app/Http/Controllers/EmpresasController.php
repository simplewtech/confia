<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmpresasRequest;
use App\Models\Empresas;
use Illuminate\Http\Request;

class EmpresasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Empresas::oldest('id')->get();
        return view('empresas.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('empresas.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmpresasRequest $request)
    {
        Empresas::create($request->validated());
        return redirect()->route('empresas.index')->with('mensaje', 'Registro creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Empresas::findOrFail($id);
        return view('empresas.editar', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $registro = Empresas::findOrFail($id);
        $registro->delete();
        return redirect()->route('empresas.index')->with('mensaje','Este registro fue eliminado con exito');
    }
}
