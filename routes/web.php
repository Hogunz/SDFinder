<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FinderController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\PhoneController;
use App\Http\Controllers\Admin\ChipsetController;
use App\Http\Controllers\Admin\OperatingSystemController;
use App\Http\Controllers\Vendor\VendorInformationController;
use App\Http\Controllers\Admin\OperatingSystemVersionController;
use App\Http\Controllers\Vendor\PhoneController as VendorPhoneController;

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

Route::get('/mobile-finder', [FinderController::class, 'phoneFinder'])->name('mobile.finder');
Route::get('/mobile-finder-2', [FinderController::class, 'phoneFinderOld'])->name('mobile.finder.old');
Route::get('/mobile-finder/view', [FinderController::class, 'viewPhones'])->name('mobile.viewPhones');
Route::get('/mobile-finder/{phone}/view', [FinderController::class, 'viewPhone'])->name('mobile.viewPhone');

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


Route::name('vendor.')->prefix('vendor/')->group(function() {
    Route::get('/dashboard', function () {
        return view('vendors.dashboard');
    })->name('dashboard');

    Route::get('/profile', [VendorInformationController::class, 'index'])->name('profile.index');
    Route::get('/profile/create', [VendorInformationController::class, 'create'])->name('profile.create');
    Route::post('/profile/store', [VendorInformationController::class, 'store'])->name('profile.store');
    Route::get('/profile/edit', [VendorInformationController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [VendorInformationController::class, 'update'])->name('profile.update');
    Route::resource('phones', VendorPhoneController::class);
});

Route::get('/profile/{user}', function (User $user) {
    return view('store-profile', compact('user'));
})->name('store.profile');


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
