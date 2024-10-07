<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\mst\NumberController;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('number', NumberController::class);
})->middleware('api');
