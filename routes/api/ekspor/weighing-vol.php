<?php

use App\Http\Controllers\api\ekspor\WeighingVolController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/ekspor/')->group(function () {
    Route::apiResource('weighing-vol', WeighingVolController::class);
})->middleware('api');
