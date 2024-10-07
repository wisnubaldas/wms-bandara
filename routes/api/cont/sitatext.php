<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\cont\SitatextController;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('sitatext', SitatextController::class);
})->middleware('api');
