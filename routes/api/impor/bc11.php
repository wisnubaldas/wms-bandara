<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\impor\Bc11Controller;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('bc11', Bc11Controller::class);
})->middleware('api');
