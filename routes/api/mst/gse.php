<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\mst\GseController;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('gse', GseController::class);
})->middleware('api');
