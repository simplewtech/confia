<?php

use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\FamiliaController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\MovimientoController;
use App\Http\Controllers\MovimientoDetalleController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TipoMovimientoController;
use App\Http\Controllers\TipoPersonaController;
use App\Http\Controllers\UbicacionController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'layouts.app');


/**
 * GET: Conseguir datos
 * POST: Guardar datos o recursos
 * PUT/PATCH: Actualizar recursos
 * DELETE: Eliminar recursos
 */


// Rutas con controller

// Route::controller(FamiliaController::class)->prefix('familia')->group(function () {
//     Route::get('', 'index')->name('familia.index');
//     Route::get('/crear', 'create')->name('familia.create');
//     Route::post('/guardar', 'store')->name('familia.store');
//     Route::post('/editar{$id}', 'edit')->name('familia.edit');
//     Route::post('/actualizar{$id}', 'update')->name('familia.update');
//     Route::post('/eliminar{$id}', 'delete')->name('familia.destroy');
// });


//Rutas Resources

Route::resources([
    'empresa' => EmpresaController::class,
    'inventario' => InventarioController::class,
    'movimiento' => MovimientoController::class,
    'movimiento-detalle' => MovimientoDetalleController::class,
    'persona' => PersonaController::class,
    'producto' => ProductoController::class,
    'tipo-movimiento' => TipoMovimientoController::class,
    'tipo-persona' => TipoPersonaController::class,
    'ubicacion' => UbicacionController::class,
]);


// *Solución al problema con los nombres de las rutas(sin usar la nomenclatura de laravel)
Route::resource('familia', FamiliaController::class)->parameters([
    'familia' => 'familia'
]);



