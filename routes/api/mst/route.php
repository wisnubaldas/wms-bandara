<?php

use App\Http\Controllers\api\mst\RouteController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('route', RouteController::class);
})->middleware('api');
