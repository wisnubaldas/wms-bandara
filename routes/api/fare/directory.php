<?php

use App\Http\Controllers\api\fare\DirectoryController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/fare/')->group(function () {
    Route::apiResource('directory', DirectoryController::class);
})->middleware('api');
