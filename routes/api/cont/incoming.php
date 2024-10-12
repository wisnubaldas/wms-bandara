<?php

use App\Http\Controllers\api\cont\IncomingController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('incoming', IncomingController::class);
})->middleware('api');
