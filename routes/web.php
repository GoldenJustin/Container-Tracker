<?php

use App\Http\Controllers\AllocateController;
use App\Http\Controllers\AllocatedController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ContainerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeliveryOrderController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\IcdController;
use App\Http\Controllers\TruckController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->middleware(['auth', 'verified'])
        ->name('dashboard');
    Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('auth.login');

    // adding containers
    Route::get('container/index', [ContainerController::class, 'index'])->name('container.index');
    Route::get('container/create', [ContainerController::class, 'create'])->name('container.create');
    Route::post('container/store', [ContainerController::class, 'store'])->name('container.store');
    Route::delete('/container/{container}', [ContainerController::class, 'delete'])->name('container.delete');


    // adding drivers
    Route::get('driver/index', [DriverController::class, 'index'])->name('driver.index');
    Route::get('driver/create', [DriverController::class, 'create'])->name('driver.create');
    Route::post('driver/store', [DriverController::class, 'store'])->name('driver.store');
    Route::delete('/driver/{driver}', [DriverController::class, 'delete'])->name('driver.delete');


    // adding icd
    Route::get('icd/index', [IcdController::class, 'index'])->name('icd.index');
    Route::get('icd/create', [IcdController::class, 'create'])->name('icd.create');
    Route::post('icd/store', [IcdController::class, 'store'])->name('icd.store');
    Route::delete('/icd/{icd}', [IcdController::class, 'delete'])->name('icd.delete');

    // adding Truck
    Route::get('truck/index', [TruckController::class, 'index'])->name('truck.index');
    Route::get('truck/create', [TruckController::class, 'create'])->name('truck.create');
    Route::post('truck/store', [TruckController::class, 'store'])->name('truck.store');
    Route::delete('/truck/{truck}', [TruckController::class, 'delete'])->name('truck.delete');

    // adding Allocate
    Route::get('allocate/index', [AllocateController::class, 'index'])->name('allocate.index');
    Route::get('allocate/create', [AllocateController::class, 'create'])->name('allocate.create');
    Route::post('allocate/store', [AllocateController::class, 'store'])->name('allocate.store');
    Route::delete('/allocate/{allocate}', [AllocateController::class, 'delete'])->name('allocate.delete');

    // adding Allocated
    Route::get('allocated/index', [AllocatedController::class, 'index'])->name('allocated.index');
    Route::get('allocated/create', [AllocatedController::class, 'create'])->name('allocated.create');
    Route::post('allocated/store', [AllocatedController::class, 'store'])->name('allocated.store');
    Route::get('/allocated/edit/{id}', [AllocatedController::class, 'edit'])->name('allocated.edit');
    Route::put('/allocated/update/{id}', [AllocatedController::class, 'update'])->name('allocated.update');

    // adding DeliveryOrder
    Route::get('delivery/index', [DeliveryOrderController::class, 'index'])->name('delivery.index');
    Route::get('delivery/create', [DeliveryOrderController::class, 'create'])->name('delivery.create');
    Route::post('delivery/store', [DeliveryOrderController::class, 'store'])->name('delivery.store');
    Route::get('/delivery/edit/{id}', [DeliveryOrderController::class, 'edit'])->name('delivery.edit');
    Route::put('/delivery/update/{id}', [DeliveryOrderController::class, 'update'])->name('delivery.update');

});



Route::group(['middleware' => ['role:super-admin|staff|student']], function () {
    Route::resource('permissions', App\Http\Controllers\Permission\PermissionController::class);
    Route::get('permissions/{permissionId}/delete', [App\Http\Controllers\Permission\PermissionController::class, 'destroy']);

    Route::resource('roles', App\Http\Controllers\Role\RoleController::class);
    Route::get('roles/{roleId}/delete', [App\Http\Controllers\Role\RoleController::class, 'destroy']);
    Route::get('roles/{roleId}/give-permissions', [App\Http\Controllers\Role\RoleController::class, 'addPermissionToRole']);
    Route::put('roles/{roleId}/give-permissions', [App\Http\Controllers\Role\RoleController::class, 'givePermissionToRole']);

    Route::resource('users', App\Http\Controllers\User\UserController::class);
    Route::get('users/{userId}/delete', [App\Http\Controllers\User\UserController::class, 'destroy']);
});

require __DIR__ . '/auth.php';
