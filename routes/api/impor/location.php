<?php

use App\Http\Controllers\api\impor\LocationController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('location', LocationController::class);
})->middleware('api');
