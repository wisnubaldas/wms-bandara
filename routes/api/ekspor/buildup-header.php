<?php

use App\Http\Controllers\api\ekspor\BuildupHeaderController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/ekspor/')->group(function () {
    Route::apiResource('buildup-header', BuildupHeaderController::class);
})->middleware('api');
