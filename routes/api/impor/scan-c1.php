<?php

use App\Http\Controllers\api\impor\ScanC1Controller;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('scan-c1', ScanC1Controller::class);
})->middleware('api');
