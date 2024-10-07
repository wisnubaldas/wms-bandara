<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\gate\ImpInController;

Route::prefix('api/gate/')->group(function () {
    Route::apiResource('imp-in', ImpInController::class);
})->middleware('api');
