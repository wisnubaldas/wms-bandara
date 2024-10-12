<?php

use App\Http\Controllers\api\ekspor\DokCustomController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/ekspor/')->group(function () {
    Route::apiResource('dok-custom', DokCustomController::class);
})->middleware('api');
