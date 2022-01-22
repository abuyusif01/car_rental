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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/booking', function () {
    return view('booking');
})->name('booking');

Route::middleware(['auth:sanctum', 'verified'])->get('/booking_history', function () {
    return view('booking_history');
})->name('booking_history');

Route::middleware(['auth:sanctum', 'verified'])->get('/rent_out', function () {
    return view('rent_out');
})->name('rent_out');