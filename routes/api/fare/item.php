<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\fare\ItemController;

Route::prefix('api/fare/')->group(function () {
    Route::apiResource('item', ItemController::class);
})->middleware('api');
