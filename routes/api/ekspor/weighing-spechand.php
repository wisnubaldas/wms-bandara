<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\ekspor\WeighingSpechandController;

Route::prefix('api/ekspor/')->group(function () {
    Route::apiResource('weighing-spechand', WeighingSpechandController::class);
})->middleware('api');
