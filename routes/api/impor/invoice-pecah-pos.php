<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\impor\InvoicePecahPosController;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('invoice-pecah-pos', InvoicePecahPosController::class);
})->middleware('api');
