<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\gate\ImpOutController;

Route::prefix('api/gate/')->group(function () {
    Route::apiResource('imp-out', ImpOutController::class);
})->middleware('api');
