<?php

use App\Http\Controllers\api\cont\GateController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('gate', GateController::class);
})->middleware('api');
