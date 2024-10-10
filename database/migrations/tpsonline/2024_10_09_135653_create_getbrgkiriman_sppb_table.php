<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGetbrgkirimanSppbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('getbrgkiriman_sppb', function (Blueprint $table) {
            $table->bigInteger('noid');
            $table->string('KD_DOK_INOUT', 5)->nullable();
            $table->string('NO_DOK_INOUT', 40)->nullable();
            $table->string('TGL_DOK_INOUT', 12)->nullable()->index('TGL_DOK_INOUT');
            $table->string('CAR', 26)->index('CAR');
            $table->string('NO_DAFTAR', 30)->nullable();
            $table->string('TGL_DAFTAR', 12)->nullable();
            $table->string('KD_KANTOR', 8)->nullable();
            $table->string('KD_KANTOR_PENGAWAS', 8)->nullable();
            $table->string('KD_KANTOR_BONGKAR', 8)->nullable();
            $table->string('NPWP_IMP', 15)->nullable();
            $table->string('NM_IMP', 70)->nullable();
            $table->string('AL_IMP', 100)->nullable();
            $table->string('NPWP_PPJK', 15)->nullable();
            $table->string('NM_PPJK', 70)->nullable();
            $table->string('AL_PPJK', 100)->nullable();
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
            $table->string('TGL_BL_AWB', 12)->nullable();
            $table->string('NO_MASTER_BL_AWB', 15)->nullable();
            $table->string('TGL_MASTER_BL_AWB', 12)->nullable();
            $table->string('FL_SEGEL', 50)->nullable();
            $table->boolean('void')->default(0);
            $table->bigInteger('xml_code')->nullable()->index('xml_code');
            $table->timestamp('created_at')->default('current_timestamp()');
            $table->boolean('flag_out')->default(0);
            
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
        Schema::dropIfExists('getbrgkiriman_sppb');
    }
}
