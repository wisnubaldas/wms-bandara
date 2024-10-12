<?php

use App\Http\Controllers\api\cont\CloudStatusController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api')->group(function () {
    Route::apiResource('cloud-status', CloudStatusController::class);
})->middleware('api');
