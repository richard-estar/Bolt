<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookingController;

use function Ramsey\Uuid\v6;

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
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/booking', [bookingController::class, 'index']);
Route::post('/stepone', [bookingController::class, 'stepone']);
Route::post('/booking', [bookingController::class, 'book']);
Route::post('/booking_cash', [bookingController::class, 'cash']);
