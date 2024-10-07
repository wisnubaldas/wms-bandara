<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\impor\LocationController;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('location', LocationController::class);
})->middleware('api');
