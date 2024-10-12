<?php

use App\Http\Controllers\api\cont\RekapAndMonitorController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('rekap-and-monitor', RekapAndMonitorController::class);
})->middleware('api');
