<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\fare\ActivedController;

Route::prefix('api/fare/')->group(function () {
    Route::apiResource('actived', ActivedController::class);
})->middleware('api');
