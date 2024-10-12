<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusUploadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_upload', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->enum('type', ['mau', 'ra'])->nullable();
            $table->text('file_name')->nullable();
            $table->text('file_path')->nullable();
            $table->integer('cron_status')->nullable()->comment("0 = file disimpan didirectory & sedang diproses, \r\n1 = transfer file / insert selesai, \r\n2 = done,\r\n--------------------------------------------\r\n9 = gagal / jml sheet tidak sesuai\r\n11 = gagal proses import / proses insert");
            $table->integer('user')->nullable();
            $table->text('add_info')->nullable();
            $table->integer('key_upload')->nullable()->comment('No. upload (untuk info di header)');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status_upload');
    }
}
