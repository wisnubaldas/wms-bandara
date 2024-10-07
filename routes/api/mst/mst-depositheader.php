<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\MstDepositheaderController;

Route::prefix('api/mst')->group(function () {
    Route::apiResource('mst-depositheader', MstDepositheaderController::class);
})->middleware('api');
