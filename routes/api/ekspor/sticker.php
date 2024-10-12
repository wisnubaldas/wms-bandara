<?php

use App\Http\Controllers\api\ekspor\StickerController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/ekspor/')->group(function () {
    Route::apiResource('sticker', StickerController::class);
})->middleware('api');
