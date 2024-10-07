<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\impor\NoaController;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('noa', NoaController::class);
})->middleware('api');
