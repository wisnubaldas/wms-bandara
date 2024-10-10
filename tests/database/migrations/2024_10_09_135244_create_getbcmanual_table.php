<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGetbcmanualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('getbcmanual', function (Blueprint $table) {
            $table->integer('Noid')->primary();
            $table->string('KD_KANTOR', 10)->nullable();
            $table->string('NO_BL_AWB', 30)->nullable();
            $table->string('NO_MASTER_BL_AWB', 15)->nullable();
            $table->string('NM_IMP', 50)->nullable()->comment("NAMA IMPORTIR ATAU EKSPORTIR");
            $table->string('KD_DOK_INOUT', 5)->nullable();
            $table->string('NO_DOK_INOUT', 40)->nullable();
            $table->string('TGL_DOK_INOUT', 10)->nullable();
            $table->string('NPWP', 30)->nullable();
            $table->string('CAR', 40)->nullable();
            $table->string('JNS_KMS', 40)->nullable();
            $table->string('NO_SEGEL', 30)->nullable();
            $table->string('TGL_SEGEL', 15)->nullable();
            $table->timestamp('date_created')->nullable()->default('current_timestamp()');
            $table->double('xml_code')->nullable();
            $table->timestamp('date_updated')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('getbcmanual');
    }
}
