<?php

use App\Http\Controllers\api\cont\SearchController;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/cont/')->group(function () {
    Route::apiResource('search', SearchController::class);
})->middleware('api');
