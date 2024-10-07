<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\cont\StatusController;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('status', StatusController::class);
})->middleware('api');
