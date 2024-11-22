<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TecnicoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ChamadoController;
use App\Http\Controllers\HistoricoUsuarioController;
use App\Http\Controllers\HistoricoTecnicoController;
use App\Http\Controllers\HistoricoChamadoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('tecnico', TecnicoController::class);

Route::resource('usuario', UsuarioController::class);
Route::resource('categoria', CategoriaController::class);
Route::resource('chamado', ChamadoController::class);
Route::resource('historicoUsuario', HistoricoUsuarioController::class);
Route::resource('historicoTecnico', HistoricoTecnicoController::class);
Route::resource('historicoChamado', HistoricoChamadoController::class);

require __DIR__.'/auth.php';
