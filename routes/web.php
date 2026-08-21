<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataSchoolController;
use App\Http\Controllers\JurusanController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard_siswa', function () {

    return view('dashboard');

});

Route::get('/identitas', [DataSchoolController::class, 'index'])->name('identitas.index');
Route::put('/update/identitas', [DataSchoolController::class, 'update'])->name('identitas.update');


Route::resource('/jurusan', JurusanController::class);
