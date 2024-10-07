<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\cont\CloudStatusController;

Route::prefix('api')->group(function () {
    Route::apiResource('cloud-status', CloudStatusController::class);
})->middleware('api');
