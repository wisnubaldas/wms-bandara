<?php

use App\Http\Controllers\api\impor\CargoDamageController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('cargo-damage', CargoDamageController::class);
})->middleware('api');
