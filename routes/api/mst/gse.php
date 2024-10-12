<?php

use App\Http\Controllers\api\mst\GseController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('gse', GseController::class);
})->middleware('api');
