<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGetbc16SppbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('getbc16_sppb', function (Blueprint $table) {
            $table->bigInteger('noid');
            $table->string('KD_DOK_INOUT', 10)->nullable();
            $table->string('NO_DOK_INOUT', 30)->nullable();
            $table->string('TGL_DOK_INOUT', 10)->nullable();
            $table->string('NO_DAFTAR', 50)->nullable();
            $table->string('TGL_DAFTAR', 10)->nullable();
            $table->string('CAR', 26)->index('CAR');
            $table->string('KD_KANTOR', 6)->nullable();
            $table->string('KD_KANTOR_PENGAWAS', 6)->nullable();
            $table->string('KD_KANTOR_BONGKAR', 6)->nullable();
            $table->string('NPWP_IMP', 15)->nullable();
            $table->string('NAMA_IMP', 100)->nullable();
            $table->string('ALAMAT_IMP', 70)->nullable();
            $table->string('NPWP_PPJK', 15)->nullable();
            $table->string('NAMA_PPJK', 100)->nullable();
            $table->string('ALAMAT_PPJK', 70)->nullable();
            $table->string('NM_ANGKUT', 30)->nullable();
            $table->string('NO_VOY_FLIGHT', 10);
            $table->double('BRUTO')->nullable();
            $table->double('NETTO')->nullable();
            $table->string('GUDANG', 4)->nullable();
            $table->string('STATUS_JALUR', 1)->nullable();
            $table->string('JML_CONT', 8)->nullable();
            $table->string('NO_BC11', 6)->nullable();
            $table->string('TGL_BC11', 10)->nullable()->index('TGL_BC11');
            $table->string('NO_POS_BC11', 12)->nullable();
            $table->string('NO_BL_AWB', 30)->nullable()->index('NO_BL_AWB');
            $table->string('TGL_BL_AWB', 10)->nullable();
            $table->string('NO_MASTER_BL_AWB', 15)->nullable();
            $table->string('TGL_MASTER_BL_AWB', 10)->nullable();
            $table->string('NO_SEGEL', 15)->nullable();
            $table->string('TGL_SEGEL', 10)->nullable();
            $table->boolean('void')->default(0);
            $table->string('FL_SEGEL', 30)->nullable();
            $table->integer('xml_code')->nullable()->index('xml_code');
            $table->timestamp('created_at')->default('current_timestamp()');
            
            $table->primary(['noid', 'CAR']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('getbc16_sppb');
    }
}
