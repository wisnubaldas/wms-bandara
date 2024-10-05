<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\MstRouteController;

Route::prefix('api')->group(function () {
    Route::apiResource('mst-route', MstRouteController::class);
})->middleware('api');
