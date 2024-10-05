<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTDokpabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_dokpab', function (Blueprint $table) {
            $table->bigInteger('id_header')->primary();
            $table->string('KD_DOK_INOUT', 3)->nullable();
            $table->string('CAR', 26)->nullable()->index('CAR');
            $table->string('NO_DOK_INOUT', 30)->nullable();
            $table->date('TGL_DOK_INOUT')->nullable()->index('TGL_DOK_INOUT');
            $table->string('NO_DAFTAR', 10)->nullable();
            $table->date('TGL_DAFTAR')->nullable();
            $table->string('KD_KANTOR', 10)->nullable();
            $table->string('KD_KANTOR_PENGAWAS', 10)->nullable();
            $table->string('KD_KANTOR_BONGKAR', 10)->nullable();
            $table->string('NPWP_IMP', 20)->nullable();
            $table->string('NM_IMP', 150)->nullable();
            $table->string('AL_IMP', 200)->nullable();
            $table->string('NPWP_PPJK', 20)->nullable()->index('NPWP_PPJK');
            $table->string('NM_PPJK', 150)->nullable();
            $table->string('AL_PPJK', 200)->nullable();
            $table->string('NM_ANGKUT', 30)->nullable();
            $table->string('NO_VOY_FLIGHT', 10)->nullable();
            $table->decimal('BRUTTO', 10, 2)->nullable();
            $table->decimal('NETTO', 10, 2)->nullable();
            $table->string('GUDANG', 6)->nullable();
            $table->string('STATUS_JALUR', 2)->nullable();
            $table->integer('JML_CONT')->nullable();
            $table->string('NO_BC11', 8)->nullable();
            $table->date('TGL_BC11')->nullable();
            $table->string('NO_POS_BC11', 12)->nullable();
            $table->string('NO_BL_AWB', 50)->nullable();
            $table->date('TGL_BL_AWB')->nullable();
            $table->string('NO_MASTER_BL_AWB', 50)->nullable();
            $table->date('TGL_MASTER_BL_AWB')->nullable();
            $table->string('NO_KANTONG', 100)->nullable();
            $table->string('FL_SEGEL', 10)->nullable();
            $table->timestamp('created_at')->default('current_timestamp()');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_dokpab');
    }
}
