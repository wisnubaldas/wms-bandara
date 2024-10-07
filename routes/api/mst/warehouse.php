<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\mst\WarehouseController;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('warehouse', WarehouseController::class);
})->middleware('api');
