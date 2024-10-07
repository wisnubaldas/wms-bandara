<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\mst\OperatorWhController;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('operator-wh', OperatorWhController::class);
})->middleware('api');
