<?php

use App\Http\Controllers\api\mst\TaxNumberController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('tax-number', TaxNumberController::class);
})->middleware('api');
