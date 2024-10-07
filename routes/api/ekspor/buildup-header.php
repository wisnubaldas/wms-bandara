<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\ekspor\BuildupHeaderController;

Route::prefix('api/ekspor/')->group(function () {
    Route::apiResource('buildup-header', BuildupHeaderController::class);
})->middleware('api');
