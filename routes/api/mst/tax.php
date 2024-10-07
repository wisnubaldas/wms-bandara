<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\mst\TaxController;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('tax', TaxController::class);
})->middleware('api');
