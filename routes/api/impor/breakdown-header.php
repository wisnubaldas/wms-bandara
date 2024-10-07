<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\impor\BreakdownHeaderController;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('breakdown-header', BreakdownHeaderController::class);
})->middleware('api');
