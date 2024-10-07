<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\ekspor\WeighingHeaderController;

Route::prefix('api/ekspor/')->group(function () {
    Route::apiResource('weighing-header', WeighingHeaderController::class);
})->middleware('api');
