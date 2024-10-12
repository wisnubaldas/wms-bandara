<?php

use App\Http\Controllers\api\impor\InvoiceHeaderController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('invoice-header', InvoiceHeaderController::class);
})->middleware('api');
