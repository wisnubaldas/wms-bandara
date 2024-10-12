<?php

use App\Http\Controllers\api\impor\BreakdownHeaderController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('breakdown-header', BreakdownHeaderController::class);
})->middleware('api');
