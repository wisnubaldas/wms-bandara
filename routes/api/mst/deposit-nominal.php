<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\mst\DepositNominalController;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('deposit-nominal', DepositNominalController::class);
})->middleware('api');
