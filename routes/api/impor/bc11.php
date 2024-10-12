<?php

use App\Http\Controllers\api\impor\Bc11Controller;
// sesuaikan controller nya
use Illuminate\Support\Facades\Route;

Route::prefix('api/impor/')->group(function () {
    Route::apiResource('bc11', Bc11Controller::class);
})->middleware('api');
