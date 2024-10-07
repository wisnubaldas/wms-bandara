<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\MstDepositdetailController;

Route::prefix('api/mst')->group(function () {
    Route::apiResource('mst-depositdetail', MstDepositdetailController::class);
})->middleware('api');
