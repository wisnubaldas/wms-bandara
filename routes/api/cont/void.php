<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\cont\VoidController;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('void', VoidController::class);
})->middleware('api');
