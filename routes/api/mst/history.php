<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\mst\HistoryController;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('history', HistoryController::class);
})->middleware('api');
