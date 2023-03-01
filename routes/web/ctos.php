<?php

use Illuminate\Support\Facades\Route;

// sesuaikan dulu kontroller nya
use App\Http\Controllers\Ctos\ContLoginController;

Route::middleware('auth:sanctum')->group(function()
{
    Route::controller(ContLoginController::class)->group(function () {
        Route::get('Cont_Login/get_list_logindepartmen/{employNumber}', 'get_list_logindepartmen');
        Route::get('Cont_Login/get_list_loginTPS/{employNumber}', 'get_list_loginTPS');
        Route::get('Cont_Login/get_login_database/{employNumber}/{TPScode?}/{DepartmenCode?}', 'get_login_database');

    });
});
