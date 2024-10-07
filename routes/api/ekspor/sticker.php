<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\ekspor\StickerController;

Route::prefix('api/ekspor/')->group(function () {
    Route::apiResource('sticker', StickerController::class);
})->middleware('api');
