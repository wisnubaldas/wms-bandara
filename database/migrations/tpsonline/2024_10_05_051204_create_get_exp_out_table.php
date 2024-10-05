<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGetExpOutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('get_exp_out', function (Blueprint $table) {
            $table->integer('id_kms')->primary();
            $table->string('kd_dok', 12)->nullable();
            $table->string('kd_tps', 10)->nullable()->index('kd_tps');
            $table->string('nm_angkut', 30)->nullable();
            $table->string('no_voy_flight', 20)->nullable();
            $table->string('call_sign', 8)->nullable();
            $table->date('tg_tiba')->nullable()->index('tg_tiba');
            $table->string('kd_gudang', 20)->nullable();
            $table->string('ref_num', 20)->nullable();
            $table->string('no_bl_awb', 100)->nullable()->index('no_bl_awb');
            $table->date('tgl_bl_awb')->nullable();
            $table->string('no_master_bl_awb', 30)->nullable()->index('master_bl_awb');
            $table->date('tgl_master_bl_awb')->nullable();
            $table->string('id_consignee', 30)->nullable();
            $table->string('consignee', 30)->nullable();
            $table->string('consignee_alm', 200)->nullable();
            $table->string('bruto', 10)->nullable();
            $table->string('uraian_brg', 100)->nullable();
            $table->string('no_bc11', 30)->nullable();
            $table->date('tgl_bc11')->nullable()->index('tgl_bc11');
            $table->string('no_pos_bc11', 100)->nullable();
            $table->string('cont_asal', 30)->nullable();
            $table->string('seri_kem', 30)->nullable();
            $table->string('kd_kem', 30)->nullable();
            $table->string('jml_kem', 30)->nullable();
            $table->string('kd_timbun', 30)->nullable();
            $table->string('kd_dok_inout', 30)->nullable();
            $table->string('no_dok_inout', 30)->nullable();
            $table->date('tgl_dok_inout')->nullable();
            $table->string('wk_inout', 30)->nullable();
            $table->string('kd_sar_angkut', 30)->nullable();
            $table->string('no_pol', 30)->nullable();
            $table->string('pel_muat', 30)->nullable();
            $table->string('pel_transit', 30)->nullable();
            $table->string('pel_bongkar', 30)->nullable();
            $table->string('gudang_tujuan', 30)->nullable();
            $table->string('kode_kantor', 30)->nullable();
            $table->string('no_daftar_pabean', 30)->nullable();
            $table->date('tgl_daftar_pabean')->nullable();
            $table->string('no_segel_bc', 30)->nullable();
            $table->date('tg_segel_bc')->nullable();
            $table->string('no_ijin_tps', 30)->nullable();
            $table->date('tgl_ijin_tps')->nullable();
            $table->bigInteger('id_kms_in')->nullable();
            $table->tinyInteger('flag_transfer')->nullable();
            $table->dateTime('date_create')->default('current_timestamp()');
            $table->timestamp('date_update')->default('current_timestamp()');
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
        Schema::dropIfExists('get_exp_out');
    }
}
