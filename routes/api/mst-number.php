<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\MstNumberController;

Route::prefix('api')->group(function () {
    Route::apiResource('mst-number', MstNumberController::class);
})->middleware('api');
