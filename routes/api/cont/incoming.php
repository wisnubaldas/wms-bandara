<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\cont\IncomingController;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('incoming', IncomingController::class);
})->middleware('api');
