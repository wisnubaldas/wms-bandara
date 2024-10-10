<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXmlCekResponTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xml_cek_respon', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('no_host', 30)->nullable();
            $table->string('kode_respon', 10);
            $table->double('xml_code')->nullable();
            $table->text('xml')->nullable();
            $table->timestamp('created_at')->nullable()->default('current_timestamp()');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xml_cek_respon');
    }
}
