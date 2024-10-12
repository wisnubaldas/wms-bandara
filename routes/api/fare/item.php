<?php

use App\Http\Controllers\api\fare\ItemController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/fare/')->group(function () {
    Route::apiResource('item', ItemController::class);
})->middleware('api');
