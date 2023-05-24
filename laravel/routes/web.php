<?php

use App\Http\Controllers\MenuController;
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

use App\Http\Controllers\ReservationController;

Route::get('/reservations', [ReservationController::class, 'index']);
Route::get('/reservations/create', [ReservationController::class, 'create'])->middleware('auth');
Route::get('/reservations/{id}', [ReservationController::class, 'show']);
Route::post('/reservations', [ReservationController::class,'store']);
Route::delete('/reservations/{id}', [ReservationController::class, 'destroy'])->middleware('auth');
Route::get('/reservations/edit/{id}', [ReservationController::class, 'edit'])->middleware('auth');
Route::put('/reservations/update/{id}', [ReservationController::class, 'update'])->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/delivery', function () {
    return view('delivery');
});

Route::get('/dashboard', [ReservationController::class, 'dashboard'])->middleware('auth');


