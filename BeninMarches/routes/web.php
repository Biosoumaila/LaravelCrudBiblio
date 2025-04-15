<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarcheController;
// use Illuminate\Support\Fascades\URL;

// URL::forceScheme('https');

Route::get('/', [MarcheController::class, 'index'])->name('marches.index');
// Route::get('/', [MarcheController::class, 'create'])->name('marches.create');
Route::get('/marches/create', [MarcheController::class, 'create'])->name('marches.create');
Route::post('/marches', [MarcheController::class, 'store'])->name('marches.store');
Route::get('/marches/{marche?}', [MarcheController::class, 'show'])->name('marches.show');
Route::get('/marches/{marche?}/edit', [MarcheController::class, 'edit'])->name('marches.edit');
Route::put('/marches/{marche?}', [MarcheController::class, 'update'])->name('marches.update');
Route::delete('/marches/{marche?}', [MarcheController::class, 'destroy'])->name('marches.destroy');