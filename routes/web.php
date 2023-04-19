<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ReservationController;

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

Route::get('dashboard', function () {
    return view('welcome');
})->name('dashboard');

Route::resource('agencies', AgencyController::class)->names([
    'index' => 'agencies.index',
    'create' => 'agencies.create',
    'store' => 'agencies.store',
    'show' => 'agencies.show',
    'edit' => 'agencies.edit',
    'update' => 'agencies.update',
    'destroy' => 'agencies.destroy',
]);

Route::resource('hotels', HotelController::class)->names([
    'index' => 'hotels.index',
    'create' => 'hotels.create',
    'store' => 'hotels.store',
    'show' => 'hotels.show',
    'edit' => 'hotels.edit',
    'update' => 'hotels.update',
    'destroy' => 'hotels.destroy',
]);

Route::resource('reservations', ReservationController::class)->names([
    'index' => 'reservations.index',
    'create' => 'reservations.create',
    'store' => 'reservations.store',
    'show' => 'reservations.show',
    'edit' => 'reservations.edit',
    'update' => 'reservations.update',
    'destroy' => 'reservations.destroy',
]);