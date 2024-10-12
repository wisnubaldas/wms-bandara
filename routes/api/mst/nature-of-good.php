<?php

use App\Http\Controllers\api\mst\NatureOfGoodController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('nature-of-good', NatureOfGoodController::class);
})->middleware('api');
