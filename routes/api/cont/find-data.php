<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\cont\FindDataController;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('find-data', FindDataController::class);
})->middleware('api');
