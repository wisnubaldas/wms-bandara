<?php

use App\Http\Controllers\api\ekspor\WeighingSpechandController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/ekspor/')->group(function () {
    Route::apiResource('weighing-spechand', WeighingSpechandController::class);
})->middleware('api');
