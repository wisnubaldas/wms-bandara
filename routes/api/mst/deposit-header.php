<?php

use App\Http\Controllers\api\mst\DepositHeaderController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('deposit-header', DepositHeaderController::class);
})->middleware('api');
