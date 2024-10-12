<?php

use App\Http\Controllers\api\mst\FlightController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('flight', FlightController::class);
})->middleware('api');
