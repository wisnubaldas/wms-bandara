<?php

use App\Http\Controllers\api\cont\ImportController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('import', ImportController::class);
})->middleware('api');
