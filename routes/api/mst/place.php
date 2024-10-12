<?php

use App\Http\Controllers\api\mst\PlaceController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('place', PlaceController::class);
})->middleware('api');
