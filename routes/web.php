<?php

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
    return view('welcome');
});

Route::get('/teame', function () {
    return view('team/team');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/calender', function () {
    return view('adminpages/calender');
})->middleware(['auth'])->name('calender');

Route::get('/mail-inbox', function () {
    return view('adminpages/mail-inbox');
})->middleware(['auth'])->name('mail-inbox');

Route::get('/mail-compose', function () {
    return view('adminpages/mail-compose');
})->middleware(['auth'])->name('mail-compose');

Route::get('/mail-read', function () {
    return view('adminpages/mail-read');
})->middleware(['auth'])->name('mail-read');

require __DIR__.'/auth.php';
