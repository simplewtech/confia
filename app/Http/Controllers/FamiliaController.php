<?php

namespace App\Http\Controllers;

use App\Http\Requests\FamiliaRequest;
use App\Models\Familia;
use Illuminate\Http\Request;

class FamiliaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Familia::oldest('id')->get();
        return view('familia.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('familia.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FamiliaRequest $request)
    {
        Familia::create($request->validated());
        return redirect()
            ->route('familia.index')
            ->with('mensaje', 'Registro creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Familia $familia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Familia $familia)
    {
        return view('familia.editar', compact('familia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FamiliaRequest $request, Familia $familia)
    {
        $familia->update($request->validated());
        return redirect()->route('familia.index')->with('mensaje', 'Registro actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Familia $familia)
    {
        $familia->delete();
        return redirect()->route('familia.index')->with('mensaje', 'Registro eliminado con Éxito');
    }
}
