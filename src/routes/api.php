<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ClienteController;


Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
    
    Route::get('/cliente', [ClienteController::class, 'getCliente']);
    Route::get('/clientebyid', [ClienteController::class, 'getClienteById']); 
    Route::post('/autor-insert', [AuthController::class, 'insertAutor']);
    Route::put('/autor-update', [AuthController::class, 'updateAutor']);
    Route::delete('/autor-delete', [AuthController::class, 'deleteAutor']);
 

});


