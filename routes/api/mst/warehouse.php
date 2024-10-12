<?php

use App\Http\Controllers\api\mst\WarehouseController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('warehouse', WarehouseController::class);
})->middleware('api');
