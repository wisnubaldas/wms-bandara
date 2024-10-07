<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\impor\ObDetailController;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('ob-detail', ObDetailController::class);
})->middleware('api');
