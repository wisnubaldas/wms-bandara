<?php

use Illuminate\Support\Facades\Route;

// sesuaikan dulu kontroller nya
use App\Http\Controllers\Ctos\ContLoginController;
use App\Http\Controllers\Ctos\ContCloudStatusController;
use App\Http\Controllers\Ctos\ContEksporController;
use App\Http\Controllers\Ctos\ContFinanceController;
use App\Http\Controllers\Ctos\ContFinddataController;


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
    Route::prefix('Cont_Ekspor')->group(function () {
        Route::controller(ContEksporController::class)->group(function () {
            Route::get('/get_Monitoring_hawb_for_approval/{token}', 'get_Monitoring_hawb_for_approval');
            Route::get('/get_Monitoring_CWP_for_invoice/{token}/{ProofNumber?}', 'get_Monitoring_CWP_for_invoice');
            Route::get('/get_list_eks_approval/{token}/{MasterAWB?}/{HostAWB?}', 'get_list_eks_approval');
            Route::get('/get_eks_booking/{token}/{AirlinesCode}/{FlightNo}/{DateOfFlight}', 'get_eks_booking');
            Route::get('/get_list_eks_booking/{token}/{AirlinesCode?}', 'get_list_eks_booking');
            Route::get('/get_table_npe/{token}/{namafield}/{isifield}', 'get_table_npe');
            Route::get('/get_list_eks_dokcustom/{token}/{InvoiceNumber?}', 'get_list_eks_dokcustom');
            Route::get('/get_list_eks_hostawb/{token}/{MasterAWB?}/{HostAWB?}', 'get_list_eks_hostawb');
            Route::get('/get_list_eks_masterwaybill/{token}/{MasterAWB?}', 'get_list_eks_masterwaybill');
            Route::get('/get_list_eks_schedule/{AirlinesCode?}', 'get_list_eks_schedule');
            Route::get('/get_list_waybill_weighing/{token}/{MasterAWB}/{HostAWB?}', 'get_list_waybill_weighing');
            Route::get('/get_list_eks_weighingheader/{token}/{ProofNumber?}', 'get_list_eks_weighingheader');
            Route::get('/get_list_eks_weighingdetail/{token}/{ProofNumber?}', 'get_list_eks_weighingdetail');
            Route::get('/get_list_eks_weighingvol/{token}/{ProofNumber?}', 'get_list_eks_weighingvol');
        });
    });
    Route::prefix('Cont_finance')->group(function () {
        Route::controller(ContFinanceController::class)->group(function () {
            Route::get('/get_drsc_import/{shifname}/{dateDRSC}/{PaymentCode}/{token}', 'get_drsc_import');
            Route::get('/get_drsc_ekspor/{shifname}/{dateDRSC}/{PaymentCode}/{token}', 'get_drsc_ekspor');
            Route::get('/get_list_basicprice/{LocationCode}/{WarehouseCode}/{AgreementCode}/{Datetransaction}/{totOverstay}', 'get_list_basicprice');
            Route::get('/get_list_aggrement/{WarehouseCode}/{DatabaseCode}{kd_gudang}', 'get_list_aggrement');
            Route::get('/list_fare_directory/{WarehouseCode}/{AgreementCode}', 'list_fare_directory');
            Route::get('/get_list_pajakBynumber/{token}/{TaxAwal}/{TaxAkhir}', 'get_list_pajakBynumber');
            Route::get('/get_list_pajakBydate/{token}/{DateFrom}/{DateUntil}', 'get_list_pajakBydate');
            Route::get('/get_totalfaktur/{warehouse_npwp}', 'get_totalfaktur');
            Route::get('/get_deposit_invoice/{InvoiceNumber}', 'get_deposit_invoice');
            Route::get('/get_list_depositheader/{DepositCode}', 'get_list_depositheader');
            Route::get('/get_list_depositdetail/{WarehouseCode}/{DepositCode}/{firstdate}/{lastdate}', 'get_list_depositdetail');
            Route::get('/get_Summary_deposit/{WarehouseCode}/{DepositCode}/{firstdate}', 'get_Summary_deposit');
            Route::get('/get_list_depositnominal/{DepositCode}/{WarehouseCode?}', 'get_list_depositnominal');
            Route::get('/get_list_depositor/{udepositor?}', 'get_list_depositor');
            Route::get('/get_nomor_tax/{warehouse_npwp}', 'get_nomor_tax');
        });
    });
    Route::prefix('Cont_Finddata')->group(function () {
        Route::controller(ContFinddataController::class)->group(function () {
            Route::get('/get_list_master_breakdowndetail/{token}/{MasterAWB?}', 'get_list_master_breakdowndetail');
            
        });
    });
});