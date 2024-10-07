<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\ekspor\WeighingVolController;

Route::prefix('api/ekspor/')->group(function () {
    Route::apiResource('weighing-vol', WeighingVolController::class);
})->middleware('api');
