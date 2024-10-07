<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\cont\EksporController;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('cont/ekspor', EksporController::class);
})->middleware('api');
