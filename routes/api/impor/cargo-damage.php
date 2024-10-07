<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\impor\CargoDamageController;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('cargo-damage', CargoDamageController::class);
})->middleware('api');
