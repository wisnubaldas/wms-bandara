<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\fare\KursController;

Route::prefix('api/fare/')->group(function () {
    Route::apiResource('kurs', KursController::class);
})->middleware('api');
