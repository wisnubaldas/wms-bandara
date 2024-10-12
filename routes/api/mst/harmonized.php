<?php

use App\Http\Controllers\api\mst\HarmonizedController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('harmonized', HarmonizedController::class);
})->middleware('api');
