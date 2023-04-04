<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgencyController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('agencies', AgencyController::class)->names([
    'index' => 'agency.index',
    'create' => 'agencies.create',
    'store' => 'agencies.store',
    'show' => 'agencies.show',
    'edit' => 'agencies.edit',
    'update' => 'agencies.update',
    'destroy' => 'agencies.destroy',
]);

