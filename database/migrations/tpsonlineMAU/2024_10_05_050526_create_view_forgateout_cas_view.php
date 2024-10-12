<?php

use Illuminate\Database\Migrations\Migration;

class CreateViewForgateoutCasView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement($this->dropView());
        DB::statement($this->createView());
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement($this->dropView());
    }

    private function createView()
    {
        return <<<'SQL'
            CREATE VIEW `view_forgateout_cas` AS select `get_imp_in`.`id_kms` AS `id_kms`,`get_imp_in`.`kd_dok` AS `kd_dok`,`get_imp_in`.`kd_tps` AS `kd_tps`,`get_imp_in`.`nm_angkut` AS `nm_angkut`,`get_imp_in`.`no_voy_flight` AS `no_voy_flight`,`get_imp_in`.`call_sign` AS `call_sign`,`get_imp_in`.`tg_tiba` AS `tg_tiba`,`get_imp_in`.`kd_gudang` AS `kd_gudang`,`get_imp_in`.`ref_num` AS `ref_num`,`get_imp_in`.`no_bl_awb` AS `no_bl_awb`,`get_imp_in`.`tgl_bl_awb` AS `tgl_bl_awb`,`get_imp_in`.`no_master_bl_awb` AS `no_master_bl_awb`,`get_imp_in`.`tgl_master_bl_awb` AS `tgl_master_bl_awb`,`get_imp_in`.`id_consignee` AS `id_consignee`,`get_imp_in`.`consignee` AS `consignee`,`get_imp_in`.`bruto` AS `bruto`,`get_imp_in`.`no_bc11` AS `no_bc11`,`get_imp_in`.`tgl_bc11` AS `tgl_bc11`,`get_imp_in`.`no_pos_bc11` AS `no_pos_bc11`,`get_imp_in`.`cont_asal` AS `cont_asal`,`get_imp_in`.`seri_kem` AS `seri_kem`,`get_imp_in`.`kd_kem` AS `kd_kem`,`get_imp_in`.`jml_kem` AS `jml_kem`,`get_imp_in`.`kd_timbun` AS `kd_timbun`,`get_imp_in`.`kd_dok_inout` AS `kd_dok_inout`,`get_imp_in`.`no_dok_inout` AS `no_dok_inout`,`get_imp_in`.`tgl_dok_inout` AS `tgl_dok_inout`,`get_imp_in`.`wk_inout` AS `wk_inout`,`get_imp_in`.`kd_sar_angkut` AS `kd_sar_angkut`,`get_imp_in`.`no_pol` AS `no_pol`,`get_imp_in`.`pel_muat` AS `pel_muat`,`get_imp_in`.`pel_transit` AS `pel_transit`,`get_imp_in`.`pel_bongkar` AS `pel_bongkar`,`get_imp_in`.`gudang_tujuan` AS `gudang_tujuan`,`get_imp_in`.`kode_kantor` AS `kode_kantor`,`get_imp_in`.`no_daftar_pabean` AS `no_daftar_pabean`,`get_imp_in`.`tgl_daftar_pabean` AS `tgl_daftar_pabean`,`get_imp_in`.`no_segel_bc` AS `no_segel_bc`,`get_imp_in`.`tg_segel_bc` AS `tg_segel_bc`,`get_imp_in`.`no_ijin_tps` AS `no_ijin_tps`,`get_imp_in`.`tgl_ijin_tps` AS `tgl_ijin_tps`,`get_imp_in`.`flag_transfer` AS `flag_transfer`,`get_imp_in`.`date_create` AS `date_create`,`get_imp_in`.`date_update` AS `date_update`,`get_imp_in`.`flag_gateout` AS `flag_gateout` from `get_imp_in` where `get_imp_in`.`flag_gateout` = '0' and `get_imp_in`.`flag_transfer` = 2 and `get_imp_in`.`kd_gudang` = 'GBGF' limit 1000
        SQL;
    }

    private function dropView()
    {
        return <<<'SQL'
            DROP VIEW IF EXISTS `view_forgateout_cas`;
        SQL;
    }
}
