<?php

use App\Http\Controllers\api\fare\MinchangesController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/fare/')->group(function () {
    Route::apiResource('minchanges', MinchangesController::class);
})->middleware('api');
