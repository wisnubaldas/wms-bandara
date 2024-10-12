<?php

use App\Http\Controllers\api\ekspor\WeighingHeaderController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/ekspor/')->group(function () {
    Route::apiResource('weighing-header', WeighingHeaderController::class);
})->middleware('api');
