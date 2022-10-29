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
Route::get('/device-finder', function () {
    return view('device-finder');
});
Route::get('/reviews', function () {
    return view('reviews');
});
Route::get('/brands', function () {
    return view('brands');
});
Route::get('/phone-profile', function () {
    return view('phone-profile');
});
Route::get('/store-profile', function () {
    return view('store-profile');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
