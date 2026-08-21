<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataSchoolController;
use App\Http\Controllers\JurusanController;
use Illuminate\Support\Facades\Route;
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


Route::get('/identitas', [DataSchoolController::class, 'index'])->name('identitas.index');
Route::put('/update/identitas', [DataSchoolController::class, 'update'])->name('identitas.update');


Route::resource('/jurusan', JurusanController::class);
Route::get('/profile', function () {

    return view('profile');

});


Route::middleware('auth:sanctum')->group(function () {

    Route::get('/dashboard_data', [dashboardController::class, 'dashboard']);
    Route::get('/profile/data', [dashboardController::class, 'profile']);
    Route::patch('/edit_profile', [AuthController::class, 'editProfile']);

    Route::patch('/change_password', [AuthController::class, 'changePassword']);
    Route::patch('/change_profile', [dashboardController::class, 'changeFoto']);

    Route::post('/logout', [AuthController::class, 'logout']);
});


