<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\cont\GseController;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('gse', GseController::class);
})->middleware('api');
