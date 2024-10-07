<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\cont\MonitoringController;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('monitoring', MonitoringController::class);
})->middleware('api');
