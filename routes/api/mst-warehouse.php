<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\MstWarehouseController;

Route::prefix('api')->group(function () {
    Route::apiResource('mst-warehouse', MstWarehouseController::class);
})->middleware('api');
