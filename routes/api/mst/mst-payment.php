<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\MstPaymentController;

Route::prefix('api/mst')->group(function () {
    Route::apiResource('mst-payment', MstPaymentController::class);
})->middleware('api');
