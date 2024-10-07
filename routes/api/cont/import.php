<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\cont\ImportController;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('import', ImportController::class);
})->middleware('api');
