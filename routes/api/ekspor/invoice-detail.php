<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\ekspor\InvoiceDetailController;

Route::prefix('api/ekspor/')->group(function () {
    Route::apiResource('invoice-detail', InvoiceDetailController::class);
})->middleware('api');
