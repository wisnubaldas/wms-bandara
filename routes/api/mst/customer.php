<?php

use App\Http\Controllers\api\mst\CustomerController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('customer', CustomerController::class);
})->middleware('api');
