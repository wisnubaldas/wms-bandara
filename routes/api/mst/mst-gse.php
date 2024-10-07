<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\MstGseController;

Route::prefix('api/mst')->group(function () {
    Route::apiResource('mst-gse', MstGseController::class);
})->middleware('api');
