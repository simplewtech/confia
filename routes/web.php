<?php

use App\Http\Controllers\EmpresasController;
use App\Http\Controllers\FamiliasController;
use App\Http\Controllers\InventariosController;
use App\Http\Controllers\MovimientosController;
use App\Http\Controllers\MovimientosDetallesController;
use App\Http\Controllers\PersonasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\TipoMovimientosController;
use App\Http\Controllers\TipoPersonasController;
use App\Http\Controllers\UbicacionesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
});


//Rutas empresas con controller
// Route::controller(EmpresasController::class)->prefix('empresa')->group(function () {
//     Route::get('', 'index')->name('empresa');
//     Route::get('/crear', 'create')->name('empresa.create');
//     Route::post('/guardar', 'store')->name('empresa.store');
// });




//Rutas Resources

Route::resources([
    'empresas' => EmpresasController::class,
    'familias' => FamiliasController::class,
    'inventarios' => InventariosController::class,
    'movimientos' => MovimientosController::class,
    'movimientos-detalles' => MovimientosDetallesController::class,
    'personas' => PersonasController::class,
    'productos' => ProductosController::class,
    'tipo-movimientos' => TipoMovimientosController::class,
    'tipo-personas' => TipoPersonasController::class,
    'ubicaciones' => UbicacionesController::class
]);
