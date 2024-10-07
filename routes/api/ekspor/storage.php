<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\ekspor\StorageController;

Route::prefix('api/ekspor/')->group(function () {
    Route::apiResource('storage', StorageController::class);
})->middleware('api');
