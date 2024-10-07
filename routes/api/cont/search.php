<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\cont\SearchController;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('search', SearchController::class);
})->middleware('api');
