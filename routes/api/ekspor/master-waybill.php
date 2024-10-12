<?php

use App\Http\Controllers\api\ekspor\MasterWaybillController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/ekspor/')->group(function () {
    Route::apiResource('master-waybill', MasterWaybillController::class);
})->middleware('api');
