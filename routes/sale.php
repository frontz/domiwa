<?php

use App\Http\Controllers\FilterController;
use App\Http\Controllers\FlatController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\PlotController;
use App\Http\Controllers\PremisesController;
use Illuminate\Support\Facades\Route;

Route::any('/flats', [FlatController::class, 'index'])->name('flats.index');
Route::post('/flats', [FlatController::class, 'index'])->name('flats');
Route::post('/flats', [FilterController::class, 'filter'])->name('flats');
Route::get('/flats/create', [FlatController::class, 'create'])->middleware('auth')->name('flats.create');
Route::post('/flats/update/{flat}', [FlatController::class, 'update'])->middleware('auth')->name('flats.update');
Route::get('/flats/edit/{flat}', [FlatController::class, 'edit'])->middleware('auth')->name('flats.edit');
Route::post('/flats/store', [FlatController::class, 'store'])->middleware('auth')->name('flats.store');
Route::get('/flats/show/{flat}', [FlatController::class, 'show'])->name('flats.show');
Route::get('/flats/delete/{flat}', [FlatController::class, 'destroy'])->middleware('auth')->name('flats.delete');

Route::get('/houses', [HouseController::class, 'index'])->name('houses.index');
Route::post('/houses', [HouseController::class, 'index'])->name('houses');
Route::get('/houses/create', [HouseController::class, 'create'])->middleware('auth')->name('houses.create');
Route::post('/houses/update/{house}', [HouseController::class, 'update'])->middleware('auth')->name('houses.update');
Route::get('/houses/edit/{house}', [HouseController::class, 'edit'])->middleware('auth')->name('houses.edit');
Route::post('/houses/store', [HouseController::class, 'store'])->middleware('auth')->name('houses.store');
Route::get('/houses/show/{house}', [HouseController::class, 'show'])->name('houses.show');
Route::get('/houses/delete/{house}', [HouseController::class, 'destroy'])->middleware('auth')->name('houses.delete');

Route::get('/premises', [PremisesController::class, 'index'])->name('premises.index');
Route::post('/premises', [PremisesController::class, 'index'])->name('premises');
Route::get('/premises/create', [PremisesController::class, 'create'])->middleware('auth')->name('premises.create');
Route::post('/premises/update/{premises}', [PremisesController::class, 'update'])->middleware('auth')->name('premises.update');
Route::get('/premises/edit/{premises}', [PremisesController::class, 'edit'])->middleware('auth')->name('premises.edit');
Route::post('/premises/store', [PremisesController::class, 'store'])->middleware('auth')->name('premises.store');
Route::get('/premises/show/{premises}', [PremisesController::class, 'show'])->name('premises.show');
Route::get('/premises/delete/{premises}', [PremisesController::class, 'destroy'])->middleware('auth')->name('premises.delete');

Route::get('/plots', [PlotController::class, 'index'])->name('plots.index');
Route::get('/plots/create', [PlotController::class, 'create'])->middleware('auth')->name('plots.create');
Route::post('/plots/update/{plot}', [PlotController::class, 'update'])->middleware('auth')->name('plots.update');
Route::get('/plots/edit/{plot}', [PlotController::class, 'edit'])->middleware('auth')->name('plots.edit');
Route::post('/plots/store', [PlotController::class, 'store'])->middleware('auth')->name('plots.store');
Route::get('/plots/show/{plot}', [PlotController::class, 'show'])->name('plots.show');
Route::get('/plots/delete/{plot}', [PlotController::class, 'destroy'])->middleware('auth')->name('plots.delete');

