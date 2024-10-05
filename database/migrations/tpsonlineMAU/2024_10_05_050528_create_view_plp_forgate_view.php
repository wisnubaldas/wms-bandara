<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewPlpForgateView extends Migration
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
        return <<<SQL
            CREATE VIEW `view_plp_forgate` AS select distinct `a`.`kd_kantor` AS `kd_kantor`,`a`.`kd_tps_asal` AS `kd_tps_asal`,`a`.`kd_tps_tujuan` AS `kd_tps_tujuan`,`a`.`ref_number` AS `ref_number`,`a`.`gudang_asal` AS `gudang_asal`,`a`.`gudang_tujuan` AS `gudang_tujuan`,`a`.`no_plp` AS `no_plp`,`a`.`tgl_plp` AS `tgl_plp`,`a`.`alasan_reject` AS `alasan_reject`,`a`.`call_sign` AS `call_sign`,`a`.`nm_angkut` AS `nm_angkut`,`a`.`no_voy_flight` AS `no_voy_flight`,`a`.`tgl_tiba` AS `tgl_tiba`,`a`.`no_bc11` AS `no_bc11`,`a`.`tgl_bc11` AS `tgl_bc11`,`a`.`no_surat` AS `no_surat`,`a`.`tgl_surat` AS `tgl_surat`,`a`.`status_gatein` AS `status_gatein`,`b`.`id_header` AS `id_header`,`b`.`jns_kms` AS `jns_kms`,`b`.`jml_kms` AS `jml_kms`,`b`.`no_bl_awb` AS `no_bl_awb`,`b`.`tgl_bl_awb` AS `tgl_bl_awb`,`b`.`no_pos_bc11` AS `no_pos_bc11`,`b`.`fl_setuju` AS `fl_setuju` from (`mohon_resp_plp_tuj` `a` join `mohon_resp_plp_tuj_det` `b` on(`a`.`Noid` = `b`.`id_header`)) where `b`.`fl_setuju` = 'Y' and `a`.`status_gatein` = '0'
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `view_plp_forgate`;
        SQL;
    }
}
