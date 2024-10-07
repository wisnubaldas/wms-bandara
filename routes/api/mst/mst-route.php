<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\MstRouteController;

Route::prefix('api/mst')->group(function () {
    Route::apiResource('mst-route', MstRouteController::class);
})->middleware('api');
