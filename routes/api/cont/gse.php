<?php

use App\Http\Controllers\api\cont\GseController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('gse', GseController::class);
})->middleware('api');
