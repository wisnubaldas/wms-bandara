<?php

use App\Http\Controllers\api\mst\TaxController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('tax', TaxController::class);
})->middleware('api');
