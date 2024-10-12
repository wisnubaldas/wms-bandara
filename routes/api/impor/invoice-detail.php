<?php

use App\Http\Controllers\api\impor\InvoiceDetailController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('invoice-detail', InvoiceDetailController::class);
})->middleware('api');
