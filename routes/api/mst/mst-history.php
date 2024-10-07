<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\MstHistoryController;

Route::prefix('api/mst')->group(function () {
    Route::apiResource('mst-history', MstHistoryController::class);
})->middleware('api');
