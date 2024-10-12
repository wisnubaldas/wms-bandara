<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstAirlinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_airlines', function (Blueprint $table) {
            $table->integer('Noid')->primary();
            $table->string('TwoLetterCode', 2)->nullable()->index('TwoLetterCode');
            $table->string('ThreeLetterCode', 3)->nullable();
            $table->string('AirlinesName', 25)->nullable();
            $table->string('CountryCode', 2)->nullable();
            $table->integer('Actived')->default(1);
            $table->integer('Void')->default(0);
            $table->string('KodeGudangByCustom', 5)->index('KodeGudangByCustom');
            $table->string('WHcode', 5)->nullable();
            $table->enum('activeGud', ['1', '2', '3', '4', '5'])->nullable()->comment('1=int,2=dom,3=all,4=imp&inc,5=eks&out');
            $table->boolean('flag_ekspor')->default(0);
            $table->boolean('flag_import')->default(0);
            $table->boolean('flag_outgoing')->default(0);
            $table->boolean('flag_incoming')->default(0);
            $table->boolean('flag_plp')->default(0);
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
        Schema::dropIfExists('mst_airlines');
    }
}
