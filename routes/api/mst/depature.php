<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\mst\DepatureController;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('depature', DepatureController::class);
})->middleware('api');
