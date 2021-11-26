<?php

use App\Http\Controllers\FlatController;
use App\Http\Controllers\PremisesController;
use App\Http\Controllers\ReadXmlController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\DownloadXmlFile;
use App\View\Components\GetOfferForm;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('users/list',
    [UserController::class, 'index'])
    ->middleware(['auth'])->name('admins');

Route::get('offers-management', function () {
    return view('components.get-offer-form');
})->middleware(['auth'])->name('offers-management');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/offers', [FlatController::class, 'index'])->name('offers');

Route::get('/aftermarket', function () {
    return view('aftermarket');
})->name('aftermarket');

Route::get('/design', function () {
    return view('design');
})->name('design');

Route::get('/eko', function () {
    return view('eko');
})->name('eko');

Route::get('/insurance', function () {
    return view('insurance');
})->name('insurance');

Route::get('/quotation', function () {
    return view('quotation');
})->name('quotation');

Route::get('/credit', function () {
    return view('credit');
})->name('credit');

Route::get('/geodesy', function () {
    return view('geodesy');
})->name('geodesy');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/report', function () {
    return view('report');
})->name('report');

Route::get('/get-form', function () {
    return view('components.forms.get-offer-form');
})->name('offers-management');

Route::post('/get-form', [GetOfferForm::class, 'getForm'])->name('get-form');

Route::post('/flats', [FlatController::class, 'index'])->name('flats.index');
Route::get('/flats/create', [FlatController::class, 'create'])->middleware('auth')->name('flats.create');
Route::post('/flats/update/{flat}', [FlatController::class, 'update'])->middleware('auth')->name('flats.update');
Route::get('/flats/edit/{flat}', [FlatController::class, 'edit'])->middleware('auth')->name('flats.edit');
Route::post('/flats/store', [FlatController::class, 'store'])->middleware('auth')->name('flats.store');
Route::get('/flats/show/{flat}', [FlatController::class, 'show'])->name('flats.show');
Route::get('/flats/delete/{flat}', [FlatController::class, 'destroy'])->middleware('auth')->name('flats.delete');

Route::get('/premises', [PremisesController::class, 'index'])->name('premises.index');
Route::get('/premises/create', [PremisesController::class, 'create'])->middleware('auth')->name('premises.create');
Route::post('/premises/update/{premises}', [PremisesController::class, 'update'])->middleware('auth')->name('premises.update');
Route::get('/premises/edit/{premises}', [PremisesController::class, 'edit'])->middleware('auth')->name('premises.edit');
Route::post('/premises/store', [PremisesController::class, 'store'])->middleware('auth')->name('premises.store');
Route::get('/premises/show/{premises}', [PremisesController::class, 'show'])->name('premises.show');
Route::get('/premises/delete/{premises}', [PremisesController::class, 'destroy'])->middleware('auth')->name('premises.delete');

Route::get('/downloadxml', [DownloadXmlFile::class, 'downloadXmlFile'])->name('downloadxml');

Route::get('/readxml', [ReadXmlController::class, 'index'])->name('readxml');

require __DIR__ . '/auth.php';
