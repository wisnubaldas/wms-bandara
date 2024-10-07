<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\mst\DepositDetailController;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('deposit-detail', DepositDetailController::class);
})->middleware('api');
