<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\ekspor\BookingController;

Route::prefix('api/ekspor/')->group(function () {
    Route::apiResource('booking', BookingController::class);
})->middleware('api');
