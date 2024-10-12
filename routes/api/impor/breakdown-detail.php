<?php

use App\Http\Controllers\api\impor\BreakdownDetailController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('breakdown-detail', BreakdownDetailController::class);
})->middleware('api');
