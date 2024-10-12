<?php

use App\Http\Controllers\api\cont\ManifestController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('manifest', ManifestController::class);
})->middleware('api');
