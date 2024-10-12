<?php

use App\Http\Controllers\api\cont\PlpController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('plp', PlpController::class);
})->middleware('api');
