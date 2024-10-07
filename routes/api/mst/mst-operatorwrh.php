<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\MstOperatorwrhController;

Route::prefix('api/mst')->group(function () {
    Route::apiResource('mst-operatorwrh', MstOperatorwrhController::class);
})->middleware('api');
