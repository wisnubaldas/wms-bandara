<?php

use App\Http\Controllers\api\gate\ImpInController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/gate/')->group(function () {
    Route::apiResource('imp-in', ImpInController::class);
})->middleware('api');
