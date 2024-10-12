<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_service', function (Blueprint $table) {
            $table->string('uuid', 100)->primary();
            $table->string('user', 100);
            $table->tinyInteger('id_service')->nullable();
            $table->string('url_services', 100)->comment('nama service');
            $table->string('keys_id', 100)->comment('untuk kunci pencarian, hawb, gudang, tps, npwp, no sppb dll');
            $table->text('request_content');
            $table->text('response_content');
            $table->timestamp('timestamp')->default('current_timestamp()');
            $table->enum('service_success', ['0', '1'])->default('1')->comment('1 = success 0=gagal, status data diterima bc atau gagal keterima');
            $table->enum('connection_success', ['0', '1'])->default('1')->comment('1 = success 0=gagal, status koneksi ke bc gagal atau sukses');
            $table->timestamp('created')->nullable()->default('current_timestamp()');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_service');
    }
}
