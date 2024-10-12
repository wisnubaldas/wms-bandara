<?php

use App\Http\Controllers\api\gate\ExpInController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/gate/')->group(function () {
    Route::apiResource('exp-in', ExpInController::class);
})->middleware('api');
