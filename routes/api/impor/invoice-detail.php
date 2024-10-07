<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\impor\InvoiceDetailController;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('invoice-detail', InvoiceDetailController::class);
})->middleware('api');
