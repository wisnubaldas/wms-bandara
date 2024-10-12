<?php

use App\Http\Controllers\api\impor\InvoicePecahPosController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('invoice-pecah-pos', InvoicePecahPosController::class);
})->middleware('api');
