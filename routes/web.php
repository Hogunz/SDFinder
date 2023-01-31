<?php

use App\Models\User;
use App\Models\Visitor;
use Illuminate\Support\Facades\Route;
use App\Models\Vendor\VendorInformation;
use App\Http\Controllers\FinderController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\PhoneController;
use App\Http\Controllers\Admin\LaptopController;
use App\Http\Controllers\Admin\ChipsetController;
use App\Http\Controllers\Admin\ProcessorController;
use App\Http\Controllers\Admin\GraphicsCardController;
use App\Http\Controllers\Admin\OperatingSystemController;
use App\Http\Controllers\Vendor\VendorInformationController;
use App\Http\Controllers\Admin\OperatingSystemVersionController;
use App\Http\Controllers\Vendor\PhoneController as VendorPhoneController;
use App\Http\Controllers\Vendor\LaptopController as VendorLaptopController;

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

Route::get('/', [DashboardController::class, 'welcome']);
Route::get('/brands', [DashboardController::class, 'brands']);

Route::get('/mobile-finder', [FinderController::class, 'phoneFinder'])->name('mobile.finder');
Route::get('/mobile-finder-2', [FinderController::class, 'phoneFinderOld'])->name('mobile.finder.old');
Route::get('/mobile-finder/view-2', [FinderController::class, 'viewPhones'])->name('mobile.viewPhones');
Route::get('/mobile-finder/view', [FinderController::class, 'viewMobiles'])->name('mobile.viewPhones');
Route::get('/mobile-finder/{phone}/view', [FinderController::class, 'viewPhone'])->name('mobile.viewPhone');
Route::get('/laptops-finder/view', [FinderController::class, 'viewLaptops'])->name('laptop.viewLaptops');
Route::get('/laptop-finder/{laptop}/view', [FinderController::class, 'viewLaptop'])->name('laptop.viewLaptop');

Route::get('/reviews', [DashboardController::class, 'reviews']);
Route::get('/profile/{user}', [DashboardController::class, 'storeProfile'])->name('store.profile');
Route::get('/profile/{user}/store', [DashboardController::class, 'storeMobiles'])->name('store.mobiles');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware('auth');

Route::name('vendor.')->prefix('vendor/')->middleware(['auth', 'role:vendor'])->group(function () {
    Route::get('/dashboard', function () {
        return view('vendors.dashboard');
    })->name('dashboard');

    Route::get('/profile', [VendorInformationController::class, 'index'])->name('profile.index');
    Route::get('/profile/create', [VendorInformationController::class, 'create'])->name('profile.create');
    Route::post('/profile/store', [VendorInformationController::class, 'store'])->name('profile.store');
    Route::get('/profile/edit', [VendorInformationController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [VendorInformationController::class, 'update'])->name('profile.update');
    Route::resource('phones', VendorPhoneController::class);
    Route::resource('laptops', VendorLaptopController::class);
});

Route::name('admin.')->prefix('admin/')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [VendorInformationController::class, 'dashboard'])->name('dashboard');

    //Phones
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

    //Laptop
    Route::resource('processors', ProcessorController::class);
    Route::resource('graphics_cards', GraphicsCardController::class);
    Route::resource('laptops', LaptopController::class);

    Route::put('/phones/review/{phone}', [PhoneController::class, 'review'])->name('review.phone');
    Route::put('/laptops/review/{laptop}', [LaptopController::class, 'review'])->name('review.laptop');
    //Restore phones and laptops
    Route::get('/phones/restore/{phone}', [PhoneController::class, 'restore'])->name('phones.restore');
    Route::get('/laptops/restore/{laptop}', [LaptopController::class, 'restore'])->name('laptops.restore');
    //Permanent Delete phones and laptops
    Route::delete('/laptops/forceDelete/{laptop}', [LaptopController::class, 'forceDelete'])->name('laptops.forceDelete');
    Route::delete('/phones/forceDelete/{phone}', [PhoneController::class, 'forceDelete'])->name('phones.forceDelete');
    //Restore processor
    Route::get('/processors/restore/{processor}', [ProcessorController::class, 'restore'])->name('processors.restore');
    //Restore Operating System
    Route::get('/os/restore/{os}', [OperatingSystemController::class, 'restore'])->name('os.restore');
    //Restore Chipsets
    Route::get('/chipsets/restore/{chipsets}', [ChipsetController::class, 'restore'])->name('chipsets.restore');
    //Restore Graphics Cards
    Route::get('/graphics_cards/restore/{graphics_cards}', [GraphicsCardController::class, 'restore'])->name('graphics_cards.restore');
    //Restore brands
    Route::get('/brands/restore/{brand}', [BrandController::class, 'restore'])->name('brands.restore');
});



require __DIR__ . '/auth.php';
