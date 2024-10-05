<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\MstCustomerController;

Route::prefix('api')->group(function () {
    Route::apiResource('mst-customer', MstCustomerController::class);
})->middleware('api');
