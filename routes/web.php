<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'tambahAkun']);
Route::post('/register', [AuthController::class, 'tambahAkun']);

Route::get('/loginPage', function () {

    return view('login');

});

Route::get('/login', [AuthController::class, 'daftarAkun']);
Route::post('/login', [AuthController::class, 'daftarAkun']);

Route::get('/dashboard', function () {

    return view('dashboard');

});

