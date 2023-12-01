<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::resource('libros', App\Http\Controllers\LibroController::class);
Route::resource('categorias', App\Http\Controllers\CategoriaController::class);

Route::resource('pais', App\Http\Controllers\PaiController::class);
Route::resource('empresas', App\Http\Controllers\EmpresaController::class);

Route::resource('tclientes', App\Http\Controllers\TclienteController::class);
Route::resource('tfacturas', App\Http\Controllers\TfacturaController::class);

Route::resource('departamentos', App\Http\Controllers\DepartamentoController::class);
Route::resource('ciudades', App\Http\Controllers\CiudadeController::class);

Route::resource('clientes', App\Http\Controllers\ClienteController::class);
Route::resource('facturas', App\Http\Controllers\FacturaController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
