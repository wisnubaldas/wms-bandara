<?php

use App\Http\Controllers\api\cont\SigoController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('sigo', SigoController::class);
})->middleware('api');
