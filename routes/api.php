<?php

use App\Http\Controllers\DataSchoolController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/identitas',[DataSchoolController::class, 'show']);

Route::post('/update/identitas',[DataSchoolController::class, 'update']);
