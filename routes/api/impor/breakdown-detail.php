<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\impor\BreakdownDetailController;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('breakdown-detail', BreakdownDetailController::class);
})->middleware('api');
