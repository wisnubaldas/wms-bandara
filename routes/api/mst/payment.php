<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\mst\PaymentController;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('payment', PaymentController::class);
})->middleware('api');
