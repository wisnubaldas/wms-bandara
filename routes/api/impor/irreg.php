<?php

use App\Http\Controllers\api\impor\IrregController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('irreg', IrregController::class);
})->middleware('api');
