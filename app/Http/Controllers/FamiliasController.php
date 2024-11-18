<?php

namespace App\Http\Controllers;

use App\Http\Requests\FamiliasRequest;
use App\Models\Familias;
use Illuminate\Http\Request;

class FamiliasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Familias::oldest('id')->get();
        return view('familias.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('familias.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FamiliasRequest $request)
    {
        Familias::create($request->validated());
        return redirect()->route('familias.store')->with('mensaje', 'Registro creado con éxito');
    }
    /**
     * Display the specified resource.
     */
    public function show(Familias $familias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Familias $familias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Familias $familias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $registro = Familias::findOrFail($id);
        $registro->delete();
        return redirect()->route('familias.index')->with('mensaje','Este registro fue eliminado con exito');
    }
}
