<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\mst\ShiftController;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('shift', ShiftController::class);
})->middleware('api');
