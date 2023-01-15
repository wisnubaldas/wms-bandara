<?php

use Illuminate\Support\Facades\Route;

// sesuaikan dulu kontroller nya
use App\Http\Controllers\API\TesController;
use App\Http\Controllers\API\AuthController;

Route::middleware('api')->group(function(){
        Route::middleware('auth:sanctum')->group(function () {
        Route::resource('tasks', TesController::class);
    });
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::post('register', [AuthController::class, 'register']);
});
