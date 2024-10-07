<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\mst\LocationController;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('location', LocationController::class);
})->middleware('api');
