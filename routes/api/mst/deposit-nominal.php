<?php

use App\Http\Controllers\api\mst\DepositNominalController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('deposit-nominal', DepositNominalController::class);
})->middleware('api');
