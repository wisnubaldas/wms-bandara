<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\cont\PlpController;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('plp', PlpController::class);
})->middleware('api');
