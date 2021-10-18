<?php

use App\Http\Controllers\HouseController;
use App\Http\Controllers\LoadFormController;
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

Route::post('/get-form', [GetOfferForm::class, 'getForm']);

Route::get('/houses', [HouseController::class, 'index'])->name('houses.index')->middleware('auth');
Route::get('/houses/create', [HouseController::class, 'create'])->name('houses.create')->middleware('auth');
Route::post('/houses', [HouseController::class, 'store'])->name('houses.store')->middleware('auth');
Route::get('/houses/edit/{house}', [HouseController::class, 'edit'])->name('houses.edit')->middleware('auth');
Route::post('/houses/{house}', [HouseController::class, 'update'])->name('houses.update')->middleware('auth');
Route::delete('/houses/{house}', [HouseController::class, 'destroy'])->name('houses.destroy')->middleware('auth');

Route::get('/downloadxml', [DownloadXmlFile::class, 'downloadXmlFile'])->name('downloadxml');

Route::get('/readxml', [ReadXmlController::class, 'index'])->name('readxml');

require __DIR__ . '/auth.php';
