<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/admin', [AdminController::class, 'index'])->middleware('isAdmin')->name('admin');

    Route::get('/register', function() {    
        return redirect()->route('login');
    });

    Route::resource('rooms', RoomController::class);
    Route::resource('buildings', BuildingController::class)->only(['create', 'store', 'edit', 'update', 'destroy']);
    
    Route::middleware(['isAdmin'])->group(function () {
        Route::get('/roles/add', [UserController::class, 'createRoles'])->name('roles.create');
        Route::post('/roles', [UserController::class, 'storeRoles'])->name('roles.store');  
        Route::get('/roles/{id}/edit', [UserController::class, 'editRoles'])->name('roles.edit');
        Route::put('/roles/{id}', [UserController::class, 'updateRoles'])->name('roles.update');
        Route::get('/roles/show', [UserController::class,'showRoles'])->name('roles.show');
        Route::get('/roles/{id}', [UserController::class, 'showUsersRoles'])->name('user.roles.show');
        Route::delete('/roles/{id}', [UserController::class, 'deleteRoles'])->name('roles.delete');
        Route::put('/users/{id}', [UserController::class, 'updateUserRoles'])->name('user.roles.update');
        Route::get('/users/{id}/edit', [UserController::class, 'editUserRoles'])->name('user.roles.edit');
        Route::delete('/users/{id}', [UserController::class, 'deleteUser'])->name('user.delete');
    });
    
    // Route::resource('bookings', BookingController::class);
});
