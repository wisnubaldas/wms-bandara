<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\impor\HostAwbController;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('host-awb', HostAwbController::class);
})->middleware('api');
