<?php

use App\Http\Controllers\api\cont\WhMasterController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('wh-master', WhMasterController::class);
})->middleware('api');
