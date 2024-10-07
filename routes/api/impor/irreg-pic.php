<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\impor\IrregPicController;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('irreg-pic', IrregPicController::class);
})->middleware('api');
