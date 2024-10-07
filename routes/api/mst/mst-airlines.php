<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\MstAirlinesController;

Route::prefix('api/mst')->group(function () {
    Route::apiResource('mst-airlines', MstAirlinesController::class);
})->middleware('api');
