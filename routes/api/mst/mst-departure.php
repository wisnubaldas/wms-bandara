<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\MstDepartureController;

Route::prefix('api/mst')->group(function () {
    Route::apiResource('mst-departure', MstDepartureController::class);
})->middleware('api');
