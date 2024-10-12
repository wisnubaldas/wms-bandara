<?php

use App\Http\Controllers\api\mst\CountryController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('country', CountryController::class);
})->middleware('api');
