<?php

use App\Http\Controllers\api\fare\AgreeController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/fare/')->group(function () {
    Route::apiResource('agree', AgreeController::class);
})->middleware('api');
