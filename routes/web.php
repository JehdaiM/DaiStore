<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\AuthController;



Route::get('/', [Users::class, 'welcome'])->name('index');  
Route::get('/index', [Users::class, 'index'])->name('index'); 
Route::get('/create', [Users::class, 'create'])->name('create'); 
Route::post('/', [Users::class, 'store'])->name('store'); 
Route::get('/show/{id}', [Users::class, 'show'])->name('show'); 
Route::get('/edit/{id}', [Users::class, 'edit'])->name('edit'); 
Route::put('/update/{id}', [Users::class, 'update'])->name('update');
Route::delete('/destroy/{id}', [Users::class, 'destroy'])->name('destroy'); 


Route::get('/productos', [ProductosController::class, 'index'])->name('productos.index');
Route::get('/productos/create', [ProductosController::class, 'create'])->name('productos.create');
Route::post('/productos', [ProductosController::class, 'store'])->name('productos.store');
Route::get('/productos/{id}', [ProductosController::class, 'show'])->name('productos.show');
Route::get('/productos/{id}/edit', [ProductosController::class, 'edit'])->name('productos.edit'); // Corrige esta línea
Route::put('/productos/{id}', [ProductosController::class, 'update'])->name('productos.update');
Route::delete('/productos/{id}', [ProductosController::class, 'destroy'])->name('productos.destroy');



Route::get('/pedidos', [PedidoController::class, 'index'])->name('pedidos.index');
Route::get('/pedidos/create', [PedidoController::class, 'create'])->name('pedidos.create');
Route::post('/pedidos', [PedidoController::class, 'store'])->name('pedidos.store');
Route::get('/pedidos/{id}', [PedidoController::class, 'show'])->name('pedidos.show');
Route::get('/pedidos/{id}/edit', [PedidoController::class, 'edit'])->name('pedidos.edit'); // Corrige esta línea
Route::put('/pedidos/{id}', [PedidoController::class, 'update'])->name('pedidos.update');
Route::delete('/pedidos/{id}', [PedidoController::class, 'destroy'])->name('pedidos.destroy');
