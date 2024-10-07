<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\impor\PodHeaderController;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('pod-header', PodHeaderController::class);
})->middleware('api');
