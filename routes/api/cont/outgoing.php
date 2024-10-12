<?php

use App\Http\Controllers\api\cont\OutgoingController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('outgoing', OutgoingController::class);
})->middleware('api');
