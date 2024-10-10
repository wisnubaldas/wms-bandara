<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManifestHeaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manifest_header', function (Blueprint $table) {
            $table->string('nomor_aju', 26)->primary();
            $table->string('id_data', 1)->nullable();
            $table->string('npwp', 15)->nullable();
            $table->string('jns_manifest', 2)->nullable();
            $table->string('kd_jns_manifest', 2)->nullable();
            $table->string('kppbc', 6)->nullable();
            $table->string('nobc10', 6)->nullable();
            $table->string('tglbc10', 10)->nullable();
            $table->string('nobc11', 6)->nullable();
            $table->string('tglbc11', 10)->nullable();
            $table->string('nm_sarana_angkut', 30)->nullable();
            $table->string('kd_mode', 4)->nullable();
            $table->string('callsign', 2)->nullable();
            $table->string('no_imo', 6)->nullable();
            $table->string('NO_MMSI', 10)->nullable();
            $table->string('negara', 2)->nullable();
            $table->string('no_voyage_arrival', 6)->nullable();
            $table->string('defarture_flight', 6)->nullable();
            $table->string('nahkoda', 50)->nullable();
            $table->string('Handling_agent', 50)->nullable();
            $table->string('port_asal', 5)->nullable();
            $table->string('port_transit', 5)->nullable();
            $table->string('port_bongkar', 5)->nullable();
            $table->string('port_lanjut', 5)->nullable();
            $table->string('kade', 5)->nullable();
            $table->string('tgl_tiba', 10)->nullable();
            $table->string('jam_tiba', 8)->nullable();
            $table->string('tgl_datang', 10)->nullable();
            $table->string('jam_datang', 8)->nullable();
            $table->string('tgl_bongkar', 10)->nullable();
            $table->string('jam_bongkar', 8)->nullable();
            $table->string('tgl_muat', 10)->nullable();
            $table->string('jam_muat', 8)->nullable();
            $table->string('tgl_berangkat', 10)->nullable();
            $table->string('jam_berangkat', 8)->nullable();
            $table->integer('total_pos')->nullable();
            $table->integer('total_kemasan')->nullable();
            $table->integer('total_kontainer')->nullable();
            $table->integer('total_master_bl')->nullable();
            $table->decimal('total_bruto', 10, 4)->nullable();
            $table->decimal('total_volume', 10, 4)->nullable();
            $table->string('flag_nihil', 1)->nullable();
            $table->string('status', 2)->nullable();
            $table->string('no_perbaikan', 10)->nullable();
            $table->string('tgl_perbaikan', 10)->nullable();
            $table->string('seri_perbaikan', 20)->nullable();
            $table->string('pemberitahu', 50)->nullable();
            $table->string('lengkap', 1)->nullable();
            $table->string('user', 25)->nullable();
            $table->string('id_asal_data', 25)->nullable();
            $table->string('id_modul', 20)->nullable();
            $table->string('waktu_rekam', 15)->nullable();
            $table->string('waktu_update', 15)->nullable();
            $table->string('versi_modul', 10)->nullable();
            $table->string('type_manifest', 15)->nullable();
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
        Schema::dropIfExists('manifest_header');
    }
}
