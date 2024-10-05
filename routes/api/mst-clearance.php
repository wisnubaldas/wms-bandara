<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\MstClearanceController;

Route::prefix('api')->group(function () {
    Route::apiResource('mst-clearance', MstClearanceController::class);
})->middleware('api');
