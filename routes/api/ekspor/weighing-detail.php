<?php

use App\Http\Controllers\api\ekspor\WeighingDetailController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/ekspor/')->group(function () {
    Route::apiResource('weighing-detail', WeighingDetailController::class);
})->middleware('api');
