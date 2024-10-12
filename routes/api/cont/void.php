<?php

use App\Http\Controllers\api\cont\VoidController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('void', VoidController::class);
})->middleware('api');
