<?php

use App\Http\Controllers\api\fare\ActivedController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/fare/')->group(function () {
    Route::apiResource('actived', ActivedController::class);
})->middleware('api');
