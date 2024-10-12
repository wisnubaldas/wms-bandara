<?php

use App\Http\Controllers\api\mst\DepatureController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('depature', DepatureController::class);
})->middleware('api');
