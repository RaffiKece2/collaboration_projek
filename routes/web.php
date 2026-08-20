<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\dashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'tambahAkun']);
Route::post('/register', [AuthController::class, 'tambahAkun']);

Route::get('/loginPage', function () {

    return view('login');

});

Route::get('/login', [AuthController::class, 'daftarAkun'])->name('login');
Route::post('/login', [AuthController::class, 'daftarAkun']);

Route::get('/dashboard_siswa', function () {

    return view('dashboard');

});

Route::get('/profile', function () {

    return view('profile');

});


Route::middleware('auth:sanctum')->group(function () {

    Route::get('/dashboard_data', [dashboardController::class, 'dashboard']);
    Route::get('/profile/data', [dashboardController::class, 'profile']);

    

});


