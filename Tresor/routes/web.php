<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OeuvreController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [OeuvreController::class, 'index'])->name('oeuvre');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/oeuvre/create', [OeuvreController::class, 'create'])->name('oeuvre.create');
Route::get('/oeuvre/edit/{id}', [OeuvreController::class, 'edit'])->whereNumber('id')->name('oeuvre.edit');
Route::get('/oeuvre/show/{id}', [OeuvreController::class, 'show'])->whereNumber('id')->name('oeuvre.show');
Route::get('/oeuvre/delete/{id}', [OeuvreController::class, 'destroy'])->whereNumber('id')->name('oeuvre.delete');
Route::post('/oeuvre/store', [OeuvreController::class, 'store'])->name('oeuvre.store');
Route::post('/oeuvre/update/{id}', [OeuvreController::class, 'update'])->whereNumber('id')->name('oeuvre.update');
