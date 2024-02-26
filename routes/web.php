<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

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
    Route::get('/', function () {
        return view('pages.dashboard');
    })->name('dashboard');

    Route::get('/home', function () {
        return view('pages.home');
    })->middleware('isAdmin')->name('home');

    Route::get('/admin', function () {
        return view('pages.admin.index');
    })->middleware('isAdmin')->name('admin');

    Route::get('/register', function() {
        return redirect()->route('login');
    });
    // Route::resource('bookings', BookingController::class);
});
