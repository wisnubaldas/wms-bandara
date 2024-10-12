<?php

use App\Http\Controllers\api\MstBeacukaiController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/mst')->group(function () {
    Route::apiResource('mst-beacukai', MstBeacukaiController::class);
})->middleware('api');
