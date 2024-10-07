<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\cont\RekapAndMonitorController;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('rekap-and-monitor', RekapAndMonitorController::class);
})->middleware('api');
