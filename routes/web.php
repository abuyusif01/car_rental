<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/booking', function () {
    return view('booking');
})->name('booking');

Route::middleware(['auth:sanctum', 'verified'])->post('/booking', [BookingController::class, 'store']);


Route::middleware(['auth:sanctum', 'verified'])->get('/booking_history', [BookingController::class, 'show'])->name('booking_history');
Route::middleware(['auth:sanctum', 'verified'])->get('/booking_with_values/{plateNumber}/{price}', [DashboardController::class, 'on_book_click'])->name('booking_with_values');
Route::middleware(['auth:sanctum', 'verified'])->get('/rent_out', function () {
    return view('rent_out');
})->name('rent_out');

Route::middleware(['auth:sanctum', 'verified'])->get('/about_us', function () {
    return view('about_us');
})->name('about_us');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard_import', function () {
    return view('dashboard_import');
})->name('dashboard_import');