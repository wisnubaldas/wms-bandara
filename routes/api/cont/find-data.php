<?php

use App\Http\Controllers\api\cont\FindDataController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('find-data', FindDataController::class);
})->middleware('api');
