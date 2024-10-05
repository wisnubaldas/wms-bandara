<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\MstShiftController;

Route::prefix('api')->group(function () {
    Route::apiResource('mst-shift', MstShiftController::class);
})->middleware('api');
