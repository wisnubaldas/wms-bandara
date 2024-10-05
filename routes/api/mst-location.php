<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\MstLocationController;

Route::prefix('api')->group(function () {
    Route::apiResource('mst-location', MstLocationController::class);
})->middleware('api');
