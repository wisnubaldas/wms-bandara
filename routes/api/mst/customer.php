<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\mst\CustomerController;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('customer', CustomerController::class);
})->middleware('api');
