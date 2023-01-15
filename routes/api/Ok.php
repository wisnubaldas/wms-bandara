<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
// use App\Http\Controllers\OkController;

Route::prefix('api')->group(function () {
    // Route::resource('ok', OkController::class);
    Route::get('dsdadasd');
})->middleware('api');

