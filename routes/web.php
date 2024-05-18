<?php

use App\Http\Controllers\AddressController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AddressController::class, 'index'])->name('listar');
Route::get('/consultar-cep', [AddressController::class, 'add'])->name('consultar_cep');
Route::get('/buscar-endereco', [AddressController::class, 'get'])->name('buscar_endereco');
Route::post('/salvar-endereco', [AddressController::class, 'save'])->name('salvar_endereco');

