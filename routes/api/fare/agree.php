<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\fare\AgreeController;

Route::prefix('api/fare/')->group(function () {
    Route::apiResource('agree', AgreeController::class);
})->middleware('api');
