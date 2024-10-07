<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\MstTaxController;

Route::prefix('api/mst')->group(function () {
    Route::apiResource('mst-tax', MstTaxController::class);
})->middleware('api');
