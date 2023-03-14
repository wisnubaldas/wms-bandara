<?php

use Illuminate\Support\Facades\Route;

// sesuaikan dulu kontroller nya
use App\Http\Controllers\Ctos\ContLoginController;
use App\Http\Controllers\Ctos\ContCloudStatusController;
use App\Http\Controllers\Ctos\ContEksporController;
use App\Http\Controllers\Ctos\ContFinanceController;
use App\Http\Controllers\Ctos\ContFinddataController;
use App\Http\Controllers\Ctos\ContGateController;


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
            Route::get('/get_list_master_obdetail/{token}/{MasterAWB?}', 'get_list_master_obdetail');
            Route::get('/get_list_hawb_detail/{token}/{AgenCode}/{HostAWB?}', 'get_list_hawb_detail');
            Route::get('/get_list_imp_breakdownheader/{token}/{gabung?}', 'get_list_imp_breakdownheader');
            Route::get('/get_list_imp_obheader/{token}/{gabung?}', 'get_list_imp_obheader');
            Route::get('/get_list_imp_irreg/{token}/{gabung?}', 'get_list_imp_irreg');
            Route::get('/get_list_eks_booking/{token}/{gabung?}', 'get_list_eks_booking');
            Route::get('/get_list_eks_buildupheader/{token}/{gabung?}', 'get_list_eks_buildupheader');
            Route::get('/get_list_imp_NOA_masterAWB/{token}/{MasterAWB?}', 'get_list_imp_NOA_masterAWB');
            Route::get('/get_list_eks_weighing_master/{token}/{MasterAWB?}', 'get_list_eks_weighing_master');
            Route::get('/get_list_imp_deliorderheader/{token}/{DONumber?}', 'get_list_imp_deliorderheader');
            Route::get('/get_list_invoiceheader/{token}/{WhCode}/{MasterAWB?}', 'get_list_imp_deliorderheader');
            Route::get('/get_list_doc_delivery_hawb/{token}/{Consigneename?}', 'get_list_doc_delivery_hawb');
            Route::get('/get_list_doc_delivery/{token}/{MasterAWB?}', 'get_list_doc_delivery');
            Route::get('/get_list_delivery_for_cargo_out/{token}/{DONumber?}', 'get_list_delivery_for_cargo_out');
            Route::get('/get_list_inc_breakdowndetail/{token}/{MasterAWB?}', 'get_list_inc_breakdowndetail');
            
        });
    });
    Route::prefix('Cont_gate')->group(function () {
        Route::controller(ContGateController::class)->group(function () {
            Route::get('/get_keterangan_dokumen/{nilai}', 'get_keterangan_dokumen');
            Route::get('/get_dokumen_gudang_out/{NO_BL_AWB}', 'get_dokumen_gudang_out');
            Route::get('/get_Check_c1_imp/{noid}', 'get_Check_c1_imp');
            Route::get('/get_Check_c1_imp_hawb/{hawb}', 'get_Check_c1_imp_hawb');
            Route::get('/get_m_manifest_detail/{token}/{no_host_blawb?}', 'get_m_manifest_detail');
            Route::get('/get_Check_gateIn_imp/{no_bl_awb}', 'get_Check_gateIn_imp');
            Route::get('/get_Check_gateIn_eks/{no_bl_awb}', 'get_Check_gateIn_eks');
            Route::get('/get_Check_gateOut_imp/{no_bl_awb}', 'get_Check_gateOut_imp');
            Route::get('/get_Check_gateOut_eks/{no_bl_awb}', 'get_Check_gateOut_eks');
            Route::get('/get_GateOut_sys_lama/{limit}/{flag_transfer}/{id_kms}', 'get_GateOut_sys_lama');
            Route::get('/get_Check_gateIn_sys_lama/{no_bl_awb}', 'get_Check_gateIn_sys_lama');
            Route::get('/get_GateIn_sys_lama/{limit}/{flag_transfer}/{id_kms}', 'get_GateIn_sys_lama');
            Route::get('/get_show_gateIn_imp_tanggal/{token}/{limit}/{flag_transfer}/{tgfirst}/{tglast}/{id_kms}', 'get_show_gateIn_imp_tanggal');
            Route::get('/get_show_gateIn_imp_mawb/{token}/{limit}/{flag_transfer}/{tgfirst}/{tglast}/{id_kms}', 'get_show_gateIn_imp_mawb');
            Route::get('/get_show_gateOut_imp_tanggal/{token}/{limit}/{flag_transfer}/{tgfirst}{tglast}/{id_kms}', 'get_show_gateOut_imp_tanggal');
            Route::get('/get_show_gateOut_imp_mawb/{token}/{limit}/{flag_transfer}/{no_master_bl_awb}/{id_kms}', 'get_show_gateOut_imp_mawb');
            Route::get('/get_show_gateIn_exp_tanggal/{token}/{limit}/{flag_transfer}/{tgfirst}/{tglast}/{id_kms}', 'get_show_gateIn_exp_tanggal');
            Route::get('/get_show_gateIn_exp_mawb/{token}/{limit}/{flag_transfer}/{no_master_bl_awb}/{id_kms}', 'get_show_gateIn_exp_mawb');
            Route::get('/get_show_gateIn_exp_for_Out/{token}/{limit}/{flag_transfer}/{flag_gateout}/{id_kms}', 'get_show_gateIn_exp_for_Out');
            Route::get('/get_show_gateOut_exp_tanggal/{token}/{limit}/{flag_transfer}/{tgfirst}/{tglast}/{id_kms}', 'get_show_gateOut_exp_tanggal');
            Route::get('/get_show_gateOut_exp_mawb/{token}/{limit}/{flag_transfer}/{no_master_bl_awb}/{id_kms}', 'get_show_gateOut_exp_mawb');
            Route::get('/get_sending_gatein_imp/{limit}/{flag_transfer}/{id_kms}', 'get_sending_gatein_imp');
            Route::get('/get_sending_gateout_imp/{limit}/{flag_transfer}/{id_kms}', 'get_sending_gateout_imp');
            Route::get('/get_sending_gatein_exp/{limit}/{flag_transfer}/{id_kms}', 'get_sending_gatein_exp');
            Route::get('/get_sending_gateout_exp/{limit}/{flag_transfer}/{id_kms}', 'get_sending_gateout_exp');
            Route::get('/get_ready_move_to_cloud/{type}', 'get_ready_move_to_cloud');
            Route::get('/get_update_from_cloud/{type}', 'get_update_from_cloud');
            Route::get('/get_show_breakdown_gatein_zerro/{token}', 'get_show_breakdown_gatein_zerro');
            Route::get('/get_find_gateIn_imp/{token}/{no_master_bl_awb}', 'get_find_gateIn_imp');
            Route::get('/get_modul_manifest_header/{token}/{nomor_aju}', 'get_modul_manifest_header');
            Route::get('/get_modul_manifest_masterentry/{token}/{nomor_aju?}/{id_master}', 'get_modul_manifest_masterentry');
            Route::get('/get_modul_manifest_detail/{token}/{nomor_aju}/{id_detail}', 'get_modul_manifest_detail');
            Route::get('/get_modul_manifest_detail_by_mawb/{token}/{no_master_blawb}/{no_host_blawb}', 'get_modul_manifest_detail_by_mawb');
            Route::get('/get_modul_manifest_detail_zerro/{id_detail}/{token?}/{no_master_blawb?}', 'get_modul_manifest_detail_zerro');
            Route::get('/find_modul_manifest_detail_waybill/{token}/{no_master_blawb}', 'find_modul_manifest_detail_waybill');
            Route::get('/get_modul_manifest_barang/{token}/{id_detail}/{id_barang?}', 'get_modul_manifest_barang');
            Route::get('/get_modul_manifest_dokumen/{token}/{id_detail?}/{id_dokumen}', 'get_modul_manifest_dokumen');
            Route::get('/get_modul_manifest_respon/{token}/{nomor_aju}/{id_respon?}', 'get_modul_manifest_respon');
            Route::get('/get_manifest_masterentry_for_gateIn/{token}/{fl_gate?}/{limit?}/{no_master_bl}', 'get_manifest_masterentry_for_gateIn');
            Route::get('/get_total_manifest_detail_gateIn_done/{token}/{no_master_blawb}', 'get_total_manifest_detail_gateIn_done');
            Route::get('/get_search_gateIn_imp_done/{token}/{no_bl_awb}', 'get_search_gateIn_imp_done');
            Route::get('/get_gateOut_ekspor_by_manifest/{token}', 'get_gateOut_ekspor_by_manifest');
            Route::get('/get_manifest_for_delivery/{token}', 'get_manifest_for_delivery');
            Route::get('/get_load_manifest_mawb/{token}/{nomor_aju}', 'get_load_manifest_mawb');
            Route::get('/get_ref_number/{DescriptionCode}', 'get_ref_number');
            Route::get('/get_update_dinamis/{namatable}/{namafield}/{isifield}/{namacode}/{nilaicode}', 'get_update_dinamis');
            Route::get('/get_update_flag/{namatable}/{namafield}/{namacode}/{nilaicode}', 'get_update_flag');
            Route::get('/get_update_flag_tps/{namatable}/{namafield}/{namacode}/{nilaicode}', 'get_update_flag_tps');
            Route::get('/get_update_respon_gate/{namatable}/{namacode}/{nilaicode}/{ref_num}/{respon}/{flag_transfer}/{date_update}', 'get_update_respon_gate');
            Route::get('/get_list_penegahan_awb/{no_bl_awb}/', 'get_list_penegahan_awb');
            Route::get('/get_list_penegahan_mawb/{no_master_bl_awb}/', 'get_list_penegahan_mawb');
            Route::get('/get_list_inventory', 'get_list_inventory');
            Route::get('/get_list_bangkir_CAR/{CAR}', 'get_list_bangkir_CAR');
            Route::get('/get_list_bangkir_hawb/{NO_BL_AWB}', 'get_list_bangkir_hawb');
            Route::get('/get_list_bc20_CAR/{CAR}', 'get_list_bc20_CAR');
            Route::get('/get_list_bc20_hawb/{NO_BL_AWB}', 'get_list_bc20_hawb');
            Route::get('/get_list_bc23_CAR/{CAR}', 'get_list_bc23_CAR');
            Route::get('/get_list_bc23_hawb/{NO_BL_AWB}', 'get_list_bc23_hawb');
            Route::get('/get_list_sppb/{tanggal}/{type_clearance?}', 'get_list_sppb');
            Route::get('/get_transfer_tpsonline_outward/{token}', 'get_transfer_tpsonline_outward');
            Route::get('/get_cek_data_cwp_for_tpsonline/{token}/{MasterAWB}', 'get_cek_data_cwp_for_tpsonline');
            Route::get('/get_proc_get_data_Gate_in', 'get_proc_get_data_Gate_in');
            Route::get('/get_show_reject/{token}/{namatable}/{limit}/{id_kms}', 'get_show_reject');
            Route::get('/get_cek_data_garismiring/{namaField}/{namatable}', 'get_cek_data_garismiring');
            Route::get('/get_update_perubahan/{noid}/{namatable}/{tgl_sppb}/{tgl_pib}/{tgl_bc11}/{tgl_bl_awb?}/{tgl_master_bl_awb?}', 'get_update_perubahan');
            
        });
    });
});