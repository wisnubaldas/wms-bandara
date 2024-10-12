<?php

use App\Http\Controllers\api\impor\DeliorderDetailController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('deliorder-detail', DeliorderDetailController::class);
})->middleware('api');
