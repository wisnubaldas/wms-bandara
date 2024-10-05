<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutoPenegahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auto_penegahan', function (Blueprint $table) {
            $table->integer('id_kms')->default(0);
            $table->tinyInteger('type_penegahan')->nullable()->comment("1 = Import, 2 = Eksport");
            $table->string('kd_dok', 12)->nullable();
            $table->string('kd_tps', 10)->default('GBG1');
            $table->string('nm_angkut', 100)->nullable();
            $table->string('no_voy_flight', 20)->nullable();
            $table->string('call_sign', 20)->nullable();
            $table->string('tg_tiba', 20)->nullable();
            $table->string('kd_gudang', 20)->nullable();
            $table->string('no_bl_awb', 100)->default(' ');
            $table->string('tgl_bl_awb', 20)->default('');
            $table->string('no_master_bl_awb', 30)->nullable();
            $table->string('tgl_master_bl_awb', 20)->nullable();
            $table->string('id_consignee', 30)->default(' ');
            $table->string('consignee', 30)->default(' ');
            $table->string('bruto', 10)->nullable();
            $table->string('no_bc11', 30)->nullable();
            $table->string('tgl_bc11', 20)->nullable();
            $table->string('no_pos_bc11', 100)->nullable();
            $table->string('cont_asal', 30)->default(' ');
            $table->string('seri_kem', 30)->default(' ');
            $table->string('kd_kem', 30)->nullable();
            $table->string('jml_kem', 30)->nullable();
            $table->string('kd_timbun', 30)->default(' ');
            $table->string('kd_dok_inout', 30)->nullable();
            $table->string('tgl_dok_inout', 20)->nullable();
            $table->string('wk_inout', 30)->nullable();
            $table->string('kd_sar_angkut', 30)->nullable();
            $table->string('no_pol', 30)->nullable();
            $table->string('pel_muat', 30)->default(' ');
            $table->string('pel_transit', 30)->default(' ');
            $table->string('pel_bongkar', 30)->nullable();
            $table->string('kode_kantor', 30)->default(' ');
            $table->string('no_daftar_pabean', 6)->default(' ');
            $table->string('tgl_daftar_pabean', 20)->default(' ');
            $table->string('no_segel_bc', 30)->default(' ');
            $table->string('tg_segel_bc', 20)->default(' ');
            $table->text('alasan_segel')->nullable();
            $table->string('nama_petugas_segel', 50)->nullable();
            $table->timestamp('date_create')->default('current_timestamp()');
            $table->string('no_lepas_segel', 30)->nullable();
            $table->string('tgl_lepas_segel', 20)->nullable();
            $table->string('alasan_lepas_segel', 200)->nullable();
            $table->string('petugas_lepas_segel', 50)->nullable();
            $table->boolean('flag_release')->default(0);
            $table->string('info', 20)->nullable()->comment("app_tpsonline --> action by tpsonline web dg flag_release = 0 (DISEGEL)\r\nDone --> action by tpsonline web dg flag_release 1 (SUDAH RELEASE SEGEL)\r\n---------------------------------------------------------\r\nSelain action diatas bukan dr versi web tpsonline");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auto_penegahan');
    }
}
