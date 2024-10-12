<?php

use App\Http\Controllers\api\fare\KursController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/fare/')->group(function () {
    Route::apiResource('kurs', KursController::class);
})->middleware('api');
