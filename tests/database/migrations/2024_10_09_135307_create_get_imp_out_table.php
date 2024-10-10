<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGetImpOutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('get_imp_out', function (Blueprint $table) {
            $table->bigInteger('id_kms')->primary();
            $table->string('kd_dok', 12)->default(' ');
            $table->string('kd_tps', 10)->default(' ');
            $table->string('nm_angkut', 10)->default(' ');
            $table->string('no_voy_flight', 20)->default(' ');
            $table->string('call_sign', 20)->default(' ');
            $table->string('tg_tiba', 20)->default(' ');
            $table->string('kd_gudang', 20)->default(' ');
            $table->string('ref_num', 20)->default(' ');
            $table->string('no_bl_awb', 100)->default(' ')->index('no_bl_awb');
            $table->string('tgl_bl_awb', 20)->default(' ');
            $table->string('no_master_bl_awb', 30)->default(' ')->index('no_master_bl_awb');
            $table->string('tgl_master_bl_awb', 20)->default(' ');
            $table->string('id_consignee', 30)->default(' ');
            $table->string('consignee', 30)->default(' ');
            $table->string('bruto', 10)->default(' ');
            $table->string('no_bc11', 30)->default(' ');
            $table->string('tgl_bc11', 20)->default(' ');
            $table->string('no_pos_bc11', 100)->default(' ');
            $table->string('cont_asal', 30)->default(' ');
            $table->string('seri_kem', 30)->default(' ');
            $table->string('kd_kem', 30)->default(' ');
            $table->string('jml_kem', 30)->default(' ');
            $table->string('kd_timbun', 30)->default(' ');
            $table->string('kd_dok_inout', 30)->default(' ');
            $table->string('no_dok_inout', 30)->default(' ');
            $table->string('tgl_dok_inout', 20)->default(' ');
            $table->string('wk_inout', 30)->default(' ');
            $table->string('kd_sar_angkut', 30)->default(' ');
            $table->string('no_pol', 30)->default(' ');
            $table->string('pel_muat', 30)->default(' ');
            $table->string('pel_transit', 30)->default(' ');
            $table->string('pel_bongkar', 30)->default(' ');
            $table->string('gudang_tujuan', 30)->default(' ');
            $table->string('kode_kantor', 30)->default(' ');
            $table->string('no_daftar_pabean', 30)->default(' ');
            $table->string('tgl_daftar_pabean', 20)->default('');
            $table->string('no_segel_bc', 30)->default(' ');
            $table->string('tg_segel_bc', 20)->default(' ');
            $table->string('no_ijin_tps', 30)->default(' ');
            $table->string('tgl_ijin_tps', 20)->default(' ');
            $table->boolean('flag_transfer')->default(0);
            $table->timestamp('date_create')->default('current_timestamp()');
            $table->dateTime('date_update')->nullable();
            $table->text('respon')->nullable();
            $table->string('token', 5)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('get_imp_out');
    }
}
