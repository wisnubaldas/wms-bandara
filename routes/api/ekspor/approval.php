<?php

use App\Http\Controllers\api\ekspor\ApprovalController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/ekspor/')->group(function () {
    Route::apiResource('approval', ApprovalController::class);
})->middleware('api');
