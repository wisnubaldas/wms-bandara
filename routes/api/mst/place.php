<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\mst\PlaceController;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('place', PlaceController::class);
})->middleware('api');
