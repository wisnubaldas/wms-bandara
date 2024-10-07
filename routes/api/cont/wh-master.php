<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\cont\WhMasterController;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('wh-master', WhMasterController::class);
})->middleware('api');
