<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\ekspor\ApprovalController;

Route::prefix('api/ekspor/')->group(function () {
    Route::apiResource('approval', ApprovalController::class);
})->middleware('api');
