<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\TicketController;

use App\Models\City;

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
    $cities = City::all();
    return view('welcome')->with('cities', $cities);
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

Route::resource('cities', CityController::class)->names([
    'index' => 'cities.index',
    'create' => 'cities.create',
    'store' => 'cities.store',
    'show' => 'cities.show',
    'edit' => 'cities.edit',
    'update' => 'cities.update',
    'destroy' => 'cities.destroy',
]);

Route::resource('tours', TourController::class)->names([
    'index' => 'tours.index',
    'create' => 'tours.create',
    'store' => 'tours.store',
    'show' => 'tours.show',
    'edit' => 'tours.edit',
    'update' => 'tours.update',
    'destroy' => 'tours.destroy',
]);


Route::get('reservations/{reservationId}/pdf', [ReservationController::class, 'generatePDF'])->name('reservations.pdf');
Route::get('reservations/{reservationId}/pdf_deposits', [ReservationController::class, 'generatePDF_deposits'])->name('reservations.pdf_deposits');
Route::get('reservations/{reservationId}/pdf_voucher', [ReservationController::class, 'generatePDF_voucher'])->name('reservations.pdf_voucher');


Route::resource('deposits', DepositController::class)->names([
    'index' => 'deposits.index',
    'create' => 'deposits.create',
    'store' => 'deposits.store',
    'show' => 'deposits.show',
    'edit' => 'deposits.edit',
    'update' => 'deposits.update',
    'destroy' => 'deposits.destroy',
]);

Route::resource('tickets', TicketController::class)->names([
    'index' => 'tickets.index',
    'create' => 'tickets.create',
    'store' => 'tickets.store',
    'show' => 'tickets.show',
    'edit' => 'tickets.edit',
    'update' => 'tickets.update',
    'destroy' => 'tickets.destroy',
]);

