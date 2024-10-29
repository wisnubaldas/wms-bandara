<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\MenusController;

Route::prefix('api/')->group(function () {
    Route::apiResource('menus', MenusController::class);
    Route::get('menus-tree',[MenusController::class,'menu_tree']);
})->middleware('api');
