<?php

use App\Http\Controllers\api\impor\IrregPicController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('irreg-pic', IrregPicController::class);
})->middleware('api');
