<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\impor\DeliorderHeaderController;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('deliorder-header', DeliorderHeaderController::class);
})->middleware('api');
