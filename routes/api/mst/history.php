<?php

use App\Http\Controllers\api\mst\HistoryController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('history', HistoryController::class);
})->middleware('api');
