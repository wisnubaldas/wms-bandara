<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\impor\InvoiceHeaderController;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('invoice-header', InvoiceHeaderController::class);
})->middleware('api');
