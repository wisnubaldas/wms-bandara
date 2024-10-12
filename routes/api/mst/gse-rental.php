<?php

use App\Http\Controllers\api\mst\GseRentalController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('gse-rental', GseRentalController::class);
})->middleware('api');
