<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\mst\FlightController;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('flight', FlightController::class);
})->middleware('api');
