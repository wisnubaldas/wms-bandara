<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\MstFlightController;

Route::prefix('api')->group(function () {
    Route::apiResource('mst-flight', MstFlightController::class);
})->middleware('api');
