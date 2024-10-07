<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\impor\LocationMpsController;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('location-mps', LocationMpsController::class);
})->middleware('api');
