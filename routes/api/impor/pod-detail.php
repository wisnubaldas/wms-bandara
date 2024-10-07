<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\impor\PodDetailController;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('pod-detail', PodDetailController::class);
})->middleware('api');
