<?php

use App\Http\Controllers\api\ekspor\InvoiceDetailController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/ekspor/')->group(function () {
    Route::apiResource('invoice-detail', InvoiceDetailController::class);
})->middleware('api');
