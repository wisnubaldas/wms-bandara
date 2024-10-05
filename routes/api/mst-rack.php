<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\MstRackController;

Route::prefix('api')->group(function () {
    Route::apiResource('mst-rack', MstRackController::class);
})->middleware('api');
