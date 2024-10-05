<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\MstCountryController;

Route::prefix('api')->group(function () {
    Route::apiResource('mst-country', MstCountryController::class);
})->middleware('api');
