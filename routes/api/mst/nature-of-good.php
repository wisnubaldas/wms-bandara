<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\mst\NatureOfGoodController;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('nature-of-good', NatureOfGoodController::class);
})->middleware('api');
