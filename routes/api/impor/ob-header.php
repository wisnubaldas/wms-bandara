<?php

use App\Http\Controllers\api\impor\ObHeaderController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('ob-header', ObHeaderController::class);
})->middleware('api');
