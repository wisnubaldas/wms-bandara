<?php

use App\Http\Controllers\api\impor\PodDetailController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('pod-detail', PodDetailController::class);
})->middleware('api');
