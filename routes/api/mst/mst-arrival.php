<?php

use App\Http\Controllers\api\MstArrivalController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/mst')->group(function () {
    Route::apiResource('mst-arrival', MstArrivalController::class);
})->middleware('api');
