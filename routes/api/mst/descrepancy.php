<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\mst\DescrepancyController;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('descrepancy', DescrepancyController::class);
})->middleware('api');
