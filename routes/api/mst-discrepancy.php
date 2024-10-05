<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\MstDiscrepancyController;

Route::prefix('api')->group(function () {
    Route::apiResource('mst-discrepancy', MstDiscrepancyController::class);
})->middleware('api');
