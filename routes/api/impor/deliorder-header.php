<?php

use App\Http\Controllers\api\impor\DeliorderHeaderController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('deliorder-header', DeliorderHeaderController::class);
})->middleware('api');
