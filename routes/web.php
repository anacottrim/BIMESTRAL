<?php

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\FinanceiroController;


Route::get('/', function () {
    return view('home'); 
})->name('home');


Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/create', [UsuarioController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');


Route::get('/financeiro', [FinanceiroController::class, 'index'])->name('financeiro.index');
Route::get('/financeiro/create', [FinanceiroController::class, 'create'])->name('financeiro.create');
Route::post('/financeiro', [FinanceiroController::class, 'store'])->name('financeiro.store');
