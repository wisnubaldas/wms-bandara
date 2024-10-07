<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\ekspor\ScheduleController;

Route::prefix('api/ekspor/')->group(function () {
    Route::apiResource('schedule', ScheduleController::class);
})->middleware('api');
