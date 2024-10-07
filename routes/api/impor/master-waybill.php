<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\impor\MasterWaybillController;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('master-waybill', MasterWaybillController::class);
})->middleware('api');
