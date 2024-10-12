<?php

use App\Http\Controllers\api\cont\EksporController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('ekspor', EksporController::class);
})->middleware('api');
