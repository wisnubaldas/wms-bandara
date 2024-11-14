<?php

use Illuminate\Support\Facades\Route;

// sesuaikan controller nya
use App\Http\Controllers\api\MenusController;

Route::prefix('api/')->group(function () {
    Route::prefix('menus')->group(function(){
        Route::get('/',[MenusController::class,'index']);
        Route::get('tree',[MenusController::class,'menu_tree']);
        Route::get('detail/{id}',[MenusController::class,'detail_menu']);
    });
})->middleware('api');
