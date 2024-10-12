<?php

use App\Http\Controllers\api\ekspor\ScheduleController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/ekspor/')->group(function () {
    Route::apiResource('schedule', ScheduleController::class);
})->middleware('api');
