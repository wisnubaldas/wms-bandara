<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\mst\GseRentalController;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('gse-rental', GseRentalController::class);
})->middleware('api');
