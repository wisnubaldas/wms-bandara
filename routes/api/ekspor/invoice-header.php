<?php

use App\Http\Controllers\api\ekspor\InvoiceHeaderController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/ekspor/')->group(function () {
    Route::apiResource('invoice-header', InvoiceHeaderController::class);
})->middleware('api');
