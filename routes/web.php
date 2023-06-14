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

Route::get('/',[App\Http\Controllers\PortafolioController::class, 'index']);
Auth::routes();


Route::resource('/proyectos', App\Http\Controllers\ProyectoController::class);

Route::get('layouts',[App\Http\Controllers\FormularioController::class, 'template'])->name('layouts.template');

Route::post('layouts',[App\Http\Controllers\FormularioController::class, 'store'])->name('layouts.store');

Route::post('formulario',[App\Http\Controllers\FormularioController::class, 'almacenar'])->name('formulario.almacenar');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
