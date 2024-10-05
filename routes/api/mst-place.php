<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\MstPlaceController;

Route::prefix('api')->group(function () {
    Route::apiResource('mst-place', MstPlaceController::class);
})->middleware('api');
