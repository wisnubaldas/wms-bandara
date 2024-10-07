<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\cont\OutgoingController;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('outgoing', OutgoingController::class);
})->middleware('api');
