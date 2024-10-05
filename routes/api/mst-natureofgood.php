<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\MstNatureofgoodController;

Route::prefix('api')->group(function () {
    Route::apiResource('mst-natureofgood', MstNatureofgoodController::class);
})->middleware('api');
