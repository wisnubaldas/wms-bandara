<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\MstHarmonizedController;

Route::prefix('api')->group(function () {
    Route::apiResource('mst-harmonized', MstHarmonizedController::class);
})->middleware('api');
