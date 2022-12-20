<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\GpuController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ChipsetController;
use App\Http\Controllers\Admin\OperatingSystemController;
use App\Http\Controllers\Admin\OperatingSystemVersionController;
use App\Http\Controllers\Admin\PhoneController;

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
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/mobile-finder', function () {
    return view('mobile-finder');
});
Route::get('/tablet-finder', function () {
    return view('tablet-finder');
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

Route::get('/vendor/dashboard', function () {
    return view('vendor-dashboard');
});
Route::get('/vendor/dashboard/create', function () {
    return view('vendor-dashboard-create');
});
Route::get('/vendor-dashboard-store', function () {
    return view('vendor-dashboard-store');
});




Route::name('admin.')->prefix('admin/')->group(function () {
    Route::resource('brands', BrandController::class);
    Route::resource('chipsets', ChipsetController::class);

    Route::resource('os', OperatingSystemController::class)->parameters([
        'os' => 'operating_system',
    ]);

    Route::resource('os.version', OperatingSystemVersionController::class)->parameters([
        'os' => 'operating_system',
        'version' => 'operating_system_version'
    ])->shallow();
    Route::resource('phones', PhoneController::class);
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
