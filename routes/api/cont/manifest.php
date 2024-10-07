<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\cont\ManifestController;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('manifest', ManifestController::class);
})->middleware('api');
