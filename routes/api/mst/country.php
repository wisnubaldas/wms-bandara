<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\mst\CountryController;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('country', CountryController::class);
})->middleware('api');
