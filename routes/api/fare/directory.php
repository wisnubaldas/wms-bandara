<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\fare\DirectoryController;

Route::prefix('api/fare/')->group(function () {
    Route::apiResource('directory', DirectoryController::class);
})->middleware('api');
