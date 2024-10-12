<?php

use App\Http\Controllers\api\mst\NumberController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('number', NumberController::class);
})->middleware('api');
