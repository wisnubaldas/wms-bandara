<?php

use App\Http\Controllers\api\gate\ImpOutController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/gate/')->group(function () {
    Route::apiResource('imp-out', ImpOutController::class);
})->middleware('api');
