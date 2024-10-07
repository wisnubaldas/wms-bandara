<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\impor\ObHeaderController;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('ob-header', ObHeaderController::class);
})->middleware('api');
