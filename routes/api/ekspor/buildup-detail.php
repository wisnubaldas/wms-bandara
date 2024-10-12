<?php

use App\Http\Controllers\api\ekspor\BuildupDetailController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/ekspor/')->group(function () {
    Route::apiResource('buildup-detail', BuildupDetailController::class);
})->middleware('api');
