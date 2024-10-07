<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\cont\SigoController;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('sigo', SigoController::class);
})->middleware('api');
