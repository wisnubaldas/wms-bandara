<?php

use App\Http\Controllers\api\impor\ObDetailController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('ob-detail', ObDetailController::class);
})->middleware('api');
