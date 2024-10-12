<?php

use App\Http\Controllers\api\mst\RackController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('rack', RackController::class);
})->middleware('api');
