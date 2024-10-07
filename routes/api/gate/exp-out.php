<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\gate\ExpOutController;

Route::prefix('api/gate/')->group(function () {
    Route::apiResource('exp-out', ExpOutController::class);
})->middleware('api');
