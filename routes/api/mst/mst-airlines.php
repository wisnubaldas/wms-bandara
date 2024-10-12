<?php

use App\Http\Controllers\api\MstAirlinesController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/mst')->group(function () {
    Route::apiResource('mst-airlines', MstAirlinesController::class);
})->middleware('api');
