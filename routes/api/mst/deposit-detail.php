<?php

use App\Http\Controllers\api\mst\DepositDetailController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('deposit-detail', DepositDetailController::class);
})->middleware('api');
