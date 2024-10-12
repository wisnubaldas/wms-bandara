<?php

use App\Http\Controllers\api\impor\PodHeaderController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('pod-header', PodHeaderController::class);
})->middleware('api');
