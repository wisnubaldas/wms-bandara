<?php

use App\Http\Controllers\api\ekspor\HostAwbController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/ekspor/')->group(function () {
    Route::apiResource('host-awb', HostAwbController::class);
})->middleware('api');
