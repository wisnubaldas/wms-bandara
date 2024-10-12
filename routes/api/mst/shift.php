<?php

use App\Http\Controllers\api\mst\ShiftController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('shift', ShiftController::class);
})->middleware('api');
