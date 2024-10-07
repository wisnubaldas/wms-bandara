<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\impor\DeliorderDetailController;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('deliorder-detail', DeliorderDetailController::class);
})->middleware('api');
