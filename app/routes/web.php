<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Controllers\Criptomoeda;

Route::get('/', [\App\Http\Controllers\Criptomoeda::class, 'index'])->name('criptomoeda.index');

Route::get('/create', [\App\Http\Controllers\Criptomoeda::class, 'create'])->name('criptomoeda.create');
Route::get('/store', [\App\Http\Controllers\Criptomoeda::class,''])->name('criptomoeda.store');