<?php

use App\Http\Controllers\api\mst\OperatorWhController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/mst/')->group(function () {
    Route::apiResource('operator-wh', OperatorWhController::class);
})->middleware('api');
