<?php

use App\Http\Controllers\api\ekspor\BookingController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/ekspor/')->group(function () {
    Route::apiResource('booking', BookingController::class);
})->middleware('api');
