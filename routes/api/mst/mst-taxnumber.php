<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\MstTaxnumberController;

Route::prefix('api/mst')->group(function () {
    Route::apiResource('mst-taxnumber', MstTaxnumberController::class);
})->middleware('api');
