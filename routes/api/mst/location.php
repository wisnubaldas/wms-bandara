<?php

use App\Http\Controllers\api\mst\LocationController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('location', LocationController::class);
})->middleware('api');
