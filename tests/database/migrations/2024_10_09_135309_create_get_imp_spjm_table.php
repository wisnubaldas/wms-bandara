<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGetImpSpjmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('get_imp_spjm', function (Blueprint $table) {
            $table->bigInteger('noid');
            $table->string('CAR', 26);
            $table->string('KD_KANTOR', 6)->nullable();
            $table->string('NO_PIB', 6)->nullable();
            $table->string('TGL_PIB', 10)->nullable();
            $table->string('NPWP_IMP', 15)->nullable();
            $table->string('NAMA_IMP', 50)->nullable();
            $table->string('NPWP_PPJK', 15)->nullable();
            $table->string('NAMA_PPJK', 50)->nullable();
            $table->string('GUDANG', 6)->nullable();
            $table->string('JML_CONT', 7)->nullable();
            $table->string('NO_BC11', 6)->nullable();
            $table->string('TGL_BC11', 10)->nullable()->index('TGL_BC11');
            $table->string('NO_POS_BC11', 12)->nullable();
            $table->string('FL_KARANTINA', 5)->nullable();
            $table->string('NM_ANGKUT', 30)->nullable();
            $table->string('NO_VOY_FLIGHT', 10)->nullable();
            $table->string('TGL_SPJM', 16)->nullable();
            $table->string('NO_CONT', 10)->nullable();
            $table->string('SIZE', 10)->nullable();
            $table->boolean('void')->default(0);
            $table->integer('xml_code')->nullable();
            $table->timestamp('created_at')->nullable()->default('current_timestamp()');
            
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
        Schema::dropIfExists('get_imp_spjm');
    }
}
