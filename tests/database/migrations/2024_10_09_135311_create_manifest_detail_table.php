<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManifestDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manifest_detail', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('id_detail', 35)->index('id_detail');
            $table->string('id_master', 30)->nullable();
            $table->string('nomor_aju', 26)->nullable()->index('nomor_aju');
            $table->string('kd_kelompok_pos', 2)->nullable();
            $table->string('no_pos', 4)->nullable();
            $table->string('no_sub_pos', 4)->nullable();
            $table->string('no_sub_sub_pos', 4)->nullable();
            $table->string('no_master_blawb', 15)->nullable();
            $table->string('tgl_master_blawb', 12)->nullable();
            $table->string('no_host_blawb', 30)->nullable()->index('no_host_blawb');
            $table->string('tgl_host_blawb', 12)->nullable();
            $table->string('mother_vessel', 2)->nullable();
            $table->string('npwp_consignee', 15)->nullable();
            $table->string('nama_consignee', 50)->nullable();
            $table->string('almt_consignee', 100)->nullable();
            $table->string('neg_consignee', 2)->nullable();
            $table->string('npwp_shipper', 15)->nullable();
            $table->string('nama_shipper', 50)->nullable();
            $table->string('almt_shipper', 100)->nullable();
            $table->string('neg_shipper', 2)->nullable();
            $table->string('nama_notify', 50)->nullable();
            $table->string('almt_notify', 100)->nullable();
            $table->string('neg_notify', 2)->nullable();
            $table->string('port_asal', 5)->nullable();
            $table->string('port_transit', 5)->nullable();
            $table->string('port_bongkar', 5)->nullable();
            $table->string('port_akhir', 5)->nullable();
            $table->integer('jumlah_kemasan')->nullable();
            $table->string('jenis_kemasan', 5)->nullable();
            $table->string('merk_kemasan', 50)->nullable();
            $table->integer('jumlah_kontainer')->nullable();
            $table->string('bruto', 10)->nullable();
            $table->string('volume', 10)->nullable();
            $table->string('fl_partial', 1)->nullable();
            $table->integer('total_kemasan')->nullable();
            $table->integer('total_kontainer')->nullable();
            $table->string('status_detail', 15)->nullable();
            $table->string('fl_konsolidasi', 1)->nullable();
            $table->string('fl_pecah', 1)->default('0');
            $table->string('fl_perbaikan', 1)->nullable();
            $table->boolean('fl_gate')->default(0)->index('fl_gate');
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
        Schema::dropIfExists('manifest_detail');
    }
}
