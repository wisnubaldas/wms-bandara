<?php

use App\Http\Controllers\api\ekspor\BuildupOfLoadController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/ekspor/')->group(function () {
    Route::apiResource('buildup-of-load', BuildupOfLoadController::class);
})->middleware('api');
