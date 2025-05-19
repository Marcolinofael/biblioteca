<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('editora', App\Http\Controllers\EditoraController::class);
    Route::resource('genero', App\Http\Controllers\GeneroController::class);
    Route::resource('autor', App\Http\Controllers\AutorController::class);
    Route::resource('cliente', App\Http\Controllers\ClienteController::class);
    Route::resource('livro', App\Http\Controllers\LivroController::class);
    Route::resource('locacao', App\Http\Controllers\LocacaoController::class);

    Route::get('/consulta-cep', [ClienteController::class, 'consultaCep'])->name('consulta.cep');
});