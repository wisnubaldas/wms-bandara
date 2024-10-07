<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\fare\MinchangesController;

Route::prefix('api/fare/')->group(function () {
    Route::apiResource('minchanges', MinchangesController::class);
})->middleware('api');
