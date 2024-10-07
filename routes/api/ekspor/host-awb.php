<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\ekspor\HostAwbController;

Route::prefix('api/ekspor/')->group(function () {
    Route::apiResource('host-awb', HostAwbController::class);
})->middleware('api');
