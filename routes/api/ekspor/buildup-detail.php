<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\ekspor\BuildupDetailController;

Route::prefix('api/ekspor/')->group(function () {
    Route::apiResource('buildup-detail', BuildupDetailController::class);
})->middleware('api');
