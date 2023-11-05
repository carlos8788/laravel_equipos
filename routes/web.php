<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipoPrimeraController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/equipos', [EquipoPrimeraController::class, 'index'])->name('equipos.index');

// Mostrar el formulario
Route::get('/equipos/create', [EquipoPrimeraController::class, 'create'])->name('equipos.create');

// Manejar el envío del formulario
Route::post('/equipos', [EquipoPrimeraController::class, 'store'])->name('equipos.store');

Route::delete('/equipos/{equipo}', [EquipoPrimeraController::class, 'destroy'])->name('equipos.destroy');

Route::get('/equipos/{equipo}/edit', [EquipoPrimeraController::class, 'edit'])->name('equipos.edit');

Route::put('/equipos/{equipo}', [EquipoPrimeraController::class, 'update'])->name('equipos.update');

