<?php

use App\Http\Controllers\api\impor\NoaController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('noa', NoaController::class);
})->middleware('api');
