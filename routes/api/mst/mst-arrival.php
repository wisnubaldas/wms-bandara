<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\MstArrivalController;

Route::prefix('api/mst')->group(function () {
    Route::apiResource('mst-arrival', MstArrivalController::class);
})->middleware('api');
