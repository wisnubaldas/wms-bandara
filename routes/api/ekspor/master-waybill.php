<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\ekspor\MasterWaybillController;

Route::prefix('api/ekspor/')->group(function () {
    Route::apiResource('master-waybill', MasterWaybillController::class);
})->middleware('api');
