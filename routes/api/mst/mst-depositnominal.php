<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\MstDepositnominalController;

Route::prefix('api/mst')->group(function () {
    Route::apiResource('mst-depositnominal', MstDepositnominalController::class);
})->middleware('api');
