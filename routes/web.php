<?php

use App\Http\Controllers\UserController;
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
    return view('dashboard');
})->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('users/list',
    [UserController::class, 'index'])
->middleware(['auth'])->name('admins');

Route::get('offers/list', function() {
    return view('admins.offers');
})->middleware(['auth'])->name('offers');

Route::get('/aftermarket', function () {
    return view('aftermarket');
})->name('aftermarket');

Route::get('offers/list', function () {
        return view('admins.offers');
})->name('offers');

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

require __DIR__.'/auth.php';
