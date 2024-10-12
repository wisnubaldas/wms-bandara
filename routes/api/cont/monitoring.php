<?php

use App\Http\Controllers\api\cont\MonitoringController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('monitoring', MonitoringController::class);
})->middleware('api');
