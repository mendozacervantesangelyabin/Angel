<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\TiendasController;
use App\Http\Controllers\TiposController;


//Usuarios (Altas, Modificacion, Eliminacion y Consultas)
Route::get('/',[UsuariosController::class,'index'])->name('usuarios.index');
Route::get('/create',[UsuariosController::class,'create'])->name('usuarios.create');
Route::post('/store',[UsuariosController::class,'store'])->name('usuarios.store');
Route::get('/edit/{id_usuario}',[UsuariosController::class,'edit'])->name('usuarios.edit');
Route::put('/update/{id_usuario}',[UsuariosController::class,'update'])->name('usuarios.update');
Route::get('/show/{id_usuario}',[UsuariosController::class,'show'])->name('usuarios.show');
Route::delete('/destroy/{id_usuario}',[UsuariosController::class,'destroy'])->name('usuarios.destroy');
Route::get('/principal',[UsuariosController::class,'principal'])->name('paginaprincipal');

//Productos (Altas, Modificacion, Eliminacion y Consultas)
Route::get('/tbproductos',[ProductosController::class,'indexproductos'])->name('productos.index');
Route::get('/createproductos',[ProductosController::class,'createproductos'])->name('productos.create');
Route::post('/storeproductos',[ProductosController::class,'storeproductos'])->name('productos.store');
Route::get('/editproductos/{id_producto}',[ProductosController::class,'editproductos'])->name('productos.edit');
Route::put('/updateproductos/{id_producto}',[ProductosController::class,'updateproductos'])->name('productos.update');
Route::get('/showproductos/{id_producto}',[ProductosController::class,'showproductos'])->name('productos.show');
Route::delete('/destroyproductos/{id_producto}',[ProductosController::class,'destroyproductos'])->name('productos.destroy');
Route::get('/principal',[UsuariosController::class,'principal'])->name('paginaprincipal');


//Tiendas (Altas, Modificacion, Eliminacion y Consultas)
Route::get('/tbtiendas',[TiendasController::class,'indextiendas'])->name('tiendas.index');
Route::get('/createtiendas',[TiendasController::class,'createtiendas'])->name('tiendas.create');
Route::post('/storetiendas',[TiendasController::class,'storetiendas'])->name('tiendas.store');
Route::get('/edittiendas/{id_tienda}',[TiendasController::class,'edittiendas'])->name('tiendas.edit');
Route::put('/updatetiendas/{id_tienda}',[TiendasController::class,'updatetiendas'])->name('tiendas.update');
Route::get('/showtiendas/{id_tienda}',[TiendasController::class,'showtiendas'])->name('tiendas.show');
Route::delete('/destroytiendas/{id_tienda}',[TiendasController::class,'destroytiendas'])->name('tiendas.destroy');
Route::get('/principal',[UsuariosController::class,'principal'])->name('paginaprincipal');

//Tipos (Altas, Modificacion, Eliminacion y Consultas)
Route::get('/tbtipos',[TiposController::class,'indextipos'])->name('tipos.index');
Route::get('/createtipos',[TiposController::class,'createtipos'])->name('tipos.create');
Route::post('/storetipos',[TiposController::class,'storetipos'])->name('tipos.store');
Route::get('/edittipos/{id_tipo}',[TiposController::class,'edittipos'])->name('tipos.edit');
Route::put('/updatetipos/{id_tipo}',[TiposController::class,'updatetipos'])->name('tipos.update');
Route::get('/showtipos/{id_tipo}',[TiposController::class,'showtipos'])->name('tipos.show');
Route::delete('/destroytipos/{id_tipo}',[TiposController::class,'destroytipos'])->name('tipos.destroy');
Route::get('/principal',[UsuariosController::class,'principal'])->name('paginaprincipal');



