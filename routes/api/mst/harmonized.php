<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\mst\HarmonizedController;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('harmonized', HarmonizedController::class);
})->middleware('api');
