<?php

use Illuminate\Support\Facades\Route;

// sesuaikan dulu kontroller nya
use App\Http\Controllers\Ctos\ContLoginController;

Route::middleware('auth:sanctum')->group(function()
{
    Route::controller(ContLoginController::class)->group(function () {
        Route::get('/get_list_logindepartmen/{employNumber}', 'get_list_logindepartmen');
        Route::get('/get_list_loginTPS/{employNumber}', 'get_list_loginTPS');
        Route::get('/get_login_database/{employNumber}/{TPScode?}/{DepartmenCode?}', 'get_login_database');
        Route::get('/get_login_password/{userID}', 'get_login_password');
        Route::get('/get_login_user/{fieldname}/{EmployeeContent}', 'get_login_user');
        Route::get('/get_login_username/{EmployeeName}', 'get_login_username');
        Route::get('/get_login_permission/{EmployeeName?}/{databaseName?}/{JenisGudang?}', 'get_login_permission');
    })->prefix('Cont_Login');
});
