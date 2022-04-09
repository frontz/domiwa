<?php

use App\Http\Controllers\FilterController;
use App\Http\Controllers\FlatRentController;
use App\Http\Controllers\HouseRentController;
use App\Http\Controllers\PlotLeaseController;
use App\Http\Controllers\PremisesRentController;
use Illuminate\Support\Facades\Route;

Route::any('/flats-rent', [FlatRentController::class, 'index'])->name('flats-rent.index');
Route::post('/flats-rent', [FlatRentController::class, 'index'])->name('flats-rent');
Route::post('/flats-rent', [FilterController::class, 'filter'])->name('flats-rent');
Route::get('/flats-rent/create', [FlatRentController::class, 'create'])->middleware('auth')->name('flats-rent.create');
Route::post('/flats-rent/update/{flatRent}', [FlatRentController::class, 'update'])->middleware('auth')->name('flats-rent.update');
Route::get('/flats-rent/edit/{flatRent}', [FlatRentController::class, 'edit'])->middleware('auth')->name('flats-rent.edit');
Route::post('/flats-rent/store', [FlatRentController::class, 'store'])->middleware('auth')->name('flats-rent.store');
Route::get('/flats-rent/show/{flatRent}', [FlatRentController::class, 'show'])->name('flats-rent.show');
Route::get('/flats-rent/delete/{flatRent}', [FlatRentController::class, 'destroy'])->middleware('auth')->name('flats-rent.delete');

Route::any('/houses-rent', [HouseRentController::class, 'index'])->name('houses-rent.index');
Route::post('/houses-rent', [HouseRentController::class, 'index'])->name('houses-rent.store');
Route::post('/houses-rent', [FilterController::class, 'filter'])->name('houses-rent');
Route::get('/houses-rent/create', [HouseRentController::class, 'create'])->middleware('auth')->name('houses-rent.create');
Route::post('/houses-rent/update/{houseRent}', [HouseRentController::class, 'update'])->middleware('auth')->name('houses-rent.update');
Route::get('/houses-rent/edit/{houseRent}', [HouseRentController::class, 'edit'])->middleware('auth')->name('houses-rent.edit');
Route::post('/houses-rent/store', [HouseRentController::class, 'store'])->middleware('auth')->name('houses-rent.store');
Route::get('/houses-rent/show/{houseRent}', [HouseRentController::class, 'show'])->name('houses-rent.show');
Route::get('/houses-rent/delete/{houseRent}', [HouseRentController::class, 'destroy'])->middleware('auth')->name('houses-rent.delete');

Route::any('/premises-rent', [PremisesRentController::class, 'index'])->name('premises-rent.index');
Route::post('/premises-rent', [PremisesRentController::class, 'index'])->name('premises-rent');
Route::post('/premises-rent', [PremisesRentController::class, 'filter'])->name('premises-rent');
Route::get('/premises-rent/create', [PremisesRentController::class, 'create'])->middleware('auth')->name('premises-rent.create');
Route::post('/premises-rent/update/{premises}', [PremisesRentController::class, 'update'])->middleware('auth')->name('premises-rent.update');
Route::get('/premises-rent/edit/{premises}', [PremisesRentController::class, 'edit'])->middleware('auth')->name('premises-rent.edit');
Route::post('/premises-rent/store', [PremisesRentController::class, 'store'])->middleware('auth')->name('premises-rent.store');
Route::get('/premises-rent/show/{premises}', [PremisesRentController::class, 'show'])->name('premises-rent.show');
Route::get('/premises-rent/delete/{premises}', [PremisesRentController::class, 'destroy'])->middleware('auth')->name('premises-rent.delete');

Route::any('/plots-lease', [PlotLeaseController::class, 'index'])->name('plots-lease.index');
Route::post('/plots-rent', [PlotLeaseController::class, 'index'])->name('plots-lease');
Route::post('/plots-rent', [FilterController::class, 'filter'])->name('plots-lease');
Route::get('/plots-rent/create', [PlotLeaseController::class, 'create'])->middleware('auth')->name('plots-lease.create');
Route::post('/plots-rent/update/{plot}', [PlotLeaseController::class, 'update'])->middleware('auth')->name('plots-lease.update');
Route::get('/plots-rent/edit/{plot}', [PlotLeaseController::class, 'edit'])->middleware('auth')->name('plots-lease.edit');
Route::post('/plots-rent/store', [PlotLeaseController::class, 'store'])->middleware('auth')->name('plots-lease.store');
Route::get('/plots-rent/show/{plot}', [PlotLeaseController::class, 'show'])->name('plots-lease.show');
Route::get('/plots-rent/delete/{plot}', [PlotLeaseController::class, 'destroy'])->middleware('auth')->name('plots-lease.delete');

