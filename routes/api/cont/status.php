<?php

use App\Http\Controllers\api\cont\StatusController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('status', StatusController::class);
})->middleware('api');
