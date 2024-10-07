<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\ekspor\InvoiceHeaderController;

Route::prefix('api/ekspor/')->group(function () {
    Route::apiResource('invoice-header', InvoiceHeaderController::class);
})->middleware('api');
