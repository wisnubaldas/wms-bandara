<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\MstBeacukaiController;

Route::prefix('api/mst')->group(function () {
    Route::apiResource('mst-beacukai', MstBeacukaiController::class);
})->middleware('api');
