<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGetImpInTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('get_imp_in', function (Blueprint $table) {
            $table->bigInteger('id_kms')->primary();
            $table->string('kd_dok', 12)->nullable();
            $table->string('kd_tps', 4)->default('BGD1')->index('kd_tps');
            $table->string('nm_angkut', 30)->nullable();
            $table->string('no_voy_flight', 20)->nullable();
            $table->string('call_sign', 8)->nullable();
            $table->string('tg_tiba', 20)->nullable()->index('tg_tiba');
            $table->string('kd_gudang', 4)->nullable()->index('kd_gudang');
            $table->string('ref_num', 16)->nullable();
            $table->string('no_bl_awb', 30)->default(' ');
            $table->string('tgl_bl_awb', 8)->default('');
            $table->string('no_master_bl_awb', 30)->nullable()->index('master_bl_awb');
            $table->string('tgl_master_bl_awb', 20)->nullable();
            $table->string('id_consignee', 15)->default(' ');
            $table->string('consignee', 60)->default(' ');
            $table->string('consignee_alm', 200)->nullable();
            $table->string('bruto', 20)->nullable();
            $table->string('uraian_brg')->nullable();
            $table->string('no_bc11', 6)->nullable();
            $table->string('tgl_bc11', 8)->nullable()->index('tgl_bc11');
            $table->string('no_pos_bc11', 100)->nullable();
            $table->string('cont_asal', 30)->default(' ');
            $table->string('seri_kem', 10)->default(' ');
            $table->string('kd_kem', 30)->nullable();
            $table->string('jml_kem', 8)->nullable();
            $table->string('kd_timbun', 10)->default(' ');
            $table->string('kd_dok_inout', 2)->nullable();
            $table->string('no_dok_inout', 38)->nullable();
            $table->string('tgl_dok_inout', 8)->nullable()->index('tgl_dok_inout');
            $table->string('wk_inout', 16)->nullable();
            $table->string('kd_sar_angkut', 30)->nullable();
            $table->string('no_pol', 30)->nullable();
            $table->string('pel_muat', 30)->default(' ');
            $table->string('pel_transit', 30)->default(' ');
            $table->string('pel_bongkar', 30)->nullable();
            $table->string('gudang_tujuan', 30)->default(' ');
            $table->string('kode_kantor', 30)->nullable();
            $table->string('no_daftar_pabean', 6)->default(' ');
            $table->string('tgl_daftar_pabean', 20)->default(' ');
            $table->string('no_segel_bc', 30)->default(' ');
            $table->string('tg_segel_bc', 20)->default(' ');
            $table->string('no_ijin_tps', 30);
            $table->string('tgl_ijin_tps', 20);
            $table->tinyInteger('flag_transfer')->default(8)->index('flag_transfer');
            $table->timestamp('date_create')->default('current_timestamp()');
            $table->dateTime('date_update');
            $table->boolean('flag_gateout')->default(0)->index('flag_gateout');
            $table->text('respon')->comment(' ');
            $table->string('token', 5)->nullable();

            $table->index(['no_bl_awb', 'flag_transfer', 'flag_gateout'], 'no_bl_awb');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('get_imp_in');
    }
}
