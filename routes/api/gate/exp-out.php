<?php

use App\Http\Controllers\api\gate\ExpOutController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/gate/')->group(function () {
    Route::apiResource('exp-out', ExpOutController::class);
})->middleware('api');
