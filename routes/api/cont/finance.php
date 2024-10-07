<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\cont\FinanceController;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('finance', FinanceController::class);
})->middleware('api');
