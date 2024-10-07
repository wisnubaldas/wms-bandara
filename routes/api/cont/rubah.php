<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\cont\RubahController;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('rubah', RubahController::class);
})->middleware('api');
