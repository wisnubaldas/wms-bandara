<?php 
use \Illuminate\Database\Eloquent\Model as Eloquent;

class Get_imp_in extends Eloquent{
    protected $table = 'get_imp_in';
    protected $primaryKey = 'id_kms';
    protected $connection = 'tpsonline_mau';
    protected $fillable = [
        'no_dok_inout','tgl_dok_inout','wk_inout','kd_tps','kd_dok','kd_timbun','kd_sar_angkut','nm_angkut',
        'no_voy_flight','call_sign','tg_tiba','no_bc11','tgl_bc11','pel_muat','pel_transit','pel_bongkar',
        'kode_kantor','no_bl_awb','tgl_bl_awb','no_master_bl_awb','tgl_master_bl_awb','id_consignee',
        'consignee','bruto','no_pos_bc11','kd_kem','jml_kem','no_ijin_tps','tgl_ijin_tps','flag_transfer',
        'kd_gudang','kd_dok_inout','gudang_tujuan'
     ];
    const CREATED_AT = 'date_create';
    const UPDATED_AT = 'date_update';

}