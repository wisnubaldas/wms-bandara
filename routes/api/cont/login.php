<?php

use App\Http\Controllers\api\cont\LoginController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('login', LoginController::class);
})->middleware('api');
