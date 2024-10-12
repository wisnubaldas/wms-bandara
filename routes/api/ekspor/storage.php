<?php

use App\Http\Controllers\api\ekspor\StorageController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/ekspor/')->group(function () {
    Route::apiResource('storage', StorageController::class);
})->middleware('api');
