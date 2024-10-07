<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\impor\IrregController;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('irreg', IrregController::class);
})->middleware('api');
