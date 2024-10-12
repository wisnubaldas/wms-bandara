<?php

use App\Http\Controllers\api\impor\HostAwbController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('host-awb', HostAwbController::class);
})->middleware('api');
