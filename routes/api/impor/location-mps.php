<?php

use App\Http\Controllers\api\impor\LocationMpsController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('location-mps', LocationMpsController::class);
})->middleware('api');
