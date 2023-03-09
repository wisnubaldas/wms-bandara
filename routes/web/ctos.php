<?php

use Illuminate\Support\Facades\Route;

// sesuaikan dulu kontroller nya
use App\Http\Controllers\Ctos\ContLoginController;
use App\Http\Controllers\Ctos\ContCloudStatusController;


Route::middleware('auth:sanctum')->group(function()
{
    Route::prefix('Cont_Login')->group(function () {
        Route::controller(ContLoginController::class)->group(function () {
            Route::get('/get_list_logindepartmen/{employNumber}', 'get_list_logindepartmen');
            Route::get('/get_list_loginTPS/{employNumber}', 'get_list_loginTPS');
            Route::get('/get_login_database/{employNumber}/{TPScode?}/{DepartmenCode?}', 'get_login_database');
            Route::get('/get_login_password/{userID}', 'get_login_password');
            Route::get('/get_login_user/{fieldname}/{EmployeeContent}', 'get_login_user');
            Route::get('/get_login_username/{EmployeeName}', 'get_login_username');
            Route::get('/get_login_permission/{EmployeeName?}/{databaseName?}/{JenisGudang?}', 'get_login_permission');
            Route::get('/get_datetime_Server', 'get_datetime_Server');
        });
    });

    Route::prefix('Cont_cloud_status')->group(function () {
        Route::controller(ContCloudStatusController::class)->group(function () {
            Route::get('/get_full_Check_Status/{tps}/{id_first}', 'get_full_Check_Status');
            Route::get('/get_total_inbound_delivery_aircarft/{id_header}/{status_date}/{status_time}/{airline_code}/{flight_no}/{origin}/{dest}', 'get_total_inbound_delivery_aircarft');
            Route::get('/get_check_th_inbound_international/{waybill_smu}/{hawb?}', 'get_check_th_inbound_international');
            Route::get('/get_check_th_outbond_international/{waybill_smu}/{hawb?}', 'get_check_th_outbond_international');
        });
    });

});
