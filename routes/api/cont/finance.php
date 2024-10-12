<?php

use App\Http\Controllers\api\cont\FinanceController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('finance', FinanceController::class);
})->middleware('api');
