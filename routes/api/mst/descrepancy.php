<?php

use App\Http\Controllers\api\mst\DescrepancyController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('descrepancy', DescrepancyController::class);
})->middleware('api');
