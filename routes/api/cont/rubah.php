<?php

use App\Http\Controllers\api\cont\RubahController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('rubah', RubahController::class);
})->middleware('api');
