<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\mst\RouteController;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('route', RouteController::class);
})->middleware('api');
