<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\MstGserentalController;

Route::prefix('api')->group(function () {
    Route::apiResource('mst-gserental', MstGserentalController::class);
})->middleware('api');
