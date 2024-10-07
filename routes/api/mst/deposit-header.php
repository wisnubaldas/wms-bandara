<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\mst\DepositHeaderController;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('deposit-header', DepositHeaderController::class);
})->middleware('api');
