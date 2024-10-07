<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\ekspor\BuildupOfLoadController;

Route::prefix('api/ekspor/')->group(function () {
    Route::apiResource('buildup-of-load', BuildupOfLoadController::class);
})->middleware('api');
