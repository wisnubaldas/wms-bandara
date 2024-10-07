<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\mst\RackController;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('rack', RackController::class);
})->middleware('api');
