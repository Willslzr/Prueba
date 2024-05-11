<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CarritoController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MainController::class, 'inicio'])->name('Main');

Route::get('/carrito', [MainController::class, 'carrito'])->name('carrito');

Route::get('/compra/{id}', [CarritoController::class, 'compra'])->name('carrito.compra');

Route::post('/actualizar', [CarritoController::class, 'actualizar'])->name('carrito.actualizar');

Route::post('/eliminar', [CarritoController::class, 'eliminar'])->name('carrito.eliminar');


