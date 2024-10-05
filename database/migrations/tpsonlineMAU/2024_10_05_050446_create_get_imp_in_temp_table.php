<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGetImpInTempTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('get_imp_in_temp', function (Blueprint $table) {
            $table->integer('id_kms')->primary();
            $table->string('kd_dok', 12)->nullable();
            $table->string('kd_tps', 10)->nullable();
            $table->string('nm_angkut', 10)->nullable();
            $table->string('no_voy_flight', 20)->nullable();
            $table->string('call_sign', 20)->nullable();
            $table->string('tg_tiba', 20)->nullable();
            $table->string('kd_gudang', 20)->nullable();
            $table->string('ref_num', 20)->nullable();
            $table->string('no_bl_awb', 100)->default(' ');
            $table->string('tgl_bl_awb', 20)->default('');
            $table->string('no_master_bl_awb', 30)->nullable()->index('no_master_bl_awb');
            $table->string('tgl_master_bl_awb', 20)->nullable();
            $table->string('id_consignee', 30)->default(' ');
            $table->string('consignee', 30)->default(' ');
            $table->string('bruto', 10)->nullable();
            $table->string('uraian_brg', 50)->nullable();
            $table->string('no_bc11', 30)->nullable();
            $table->string('tgl_bc11', 20)->nullable();
            $table->string('no_pos_bc11', 100)->nullable();
            $table->string('cont_asal', 30)->default(' ');
            $table->string('seri_kem', 30)->default(' ');
            $table->string('kd_kem', 30)->nullable();
            $table->string('jml_kem', 30)->nullable();
            $table->string('kd_timbun', 30)->default(' ');
            $table->string('kd_dok_inout', 30)->nullable();
            $table->string('no_dok_inout', 30)->nullable();
            $table->string('tgl_dok_inout', 20)->nullable();
            $table->string('wk_inout', 30)->nullable();
            $table->string('kd_sar_angkut', 30)->nullable();
            $table->string('no_pol', 30)->nullable();
            $table->string('pel_muat', 30)->default(' ');
            $table->string('pel_transit', 30)->default(' ');
            $table->string('pel_bongkar', 30)->nullable();
            $table->string('gudang_tujuan', 30)->default(' ');
            $table->string('kode_kantor', 30)->default(' ');
            $table->string('no_daftar_pabean', 6)->default(' ');
            $table->string('tgl_daftar_pabean', 20)->default(' ');
            $table->string('no_segel_bc', 30)->default(' ');
            $table->string('tg_segel_bc', 20)->default(' ');
            $table->string('no_ijin_tps', 30)->default(' ');
            $table->string('tgl_ijin_tps', 20)->default(' ');
            $table->boolean('flag_transfer')->default(1)->index('flag_transfer');
            $table->timestamp('date_create')->default('current_timestamp()');
            $table->dateTime('date_update');
            $table->boolean('flag_gateout')->default(0)->index('flag_gateout');
            $table->text('respon')->comment(" ");
            $table->string('token', 5)->nullable();
            $table->timestamp('created_at')->default('current_timestamp()');
            
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
        Schema::dropIfExists('get_imp_in_temp');
    }
}
