<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\mst\TaxNumberController;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('tax-number', TaxNumberController::class);
})->middleware('api');
