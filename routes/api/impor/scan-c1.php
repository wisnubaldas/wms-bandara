<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\impor\ScanC1Controller;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('scan-c1', ScanC1Controller::class);
})->middleware('api');
