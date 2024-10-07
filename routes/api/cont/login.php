<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\cont\LoginController;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('login', LoginController::class);
})->middleware('api');
