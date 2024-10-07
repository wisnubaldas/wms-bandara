<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\gate\ExpInController;

Route::prefix('api/gate/')->group(function () {
    Route::apiResource('exp-in', ExpInController::class);
})->middleware('api');
