<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatalPlpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batal_plp', function (Blueprint $table) {
            $table->bigInteger('id_batal')->primary();
            $table->string('kd_kantor', 6);
            $table->string('tipe_data', 30)->comment('1:Baru , 2:Manual');
            $table->string('kd_tps', 4);
            $table->string('ref_number', 50)->nullable();
            $table->string('no_surat', 30);
            $table->string('tgl_surat', 8)->comment('yyyyMMdd');
            $table->string('no_plp', 30);
            $table->string('tgl_plp', 8)->comment('yyyyMMdd');
            $table->string('alasan', 200)->nullable();
            $table->string('no_bc11', 6);
            $table->string('tgl_bc11', 8)->comment('yyyyMMdd');
            $table->string('nm_pemohon', 30)->nullable();
            $table->integer('flag_transfer')->default(0);
            $table->text('respon_batal')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('batal_plp');
    }
}
