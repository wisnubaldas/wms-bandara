<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\cont\GateController;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('gate', GateController::class);
})->middleware('api');
