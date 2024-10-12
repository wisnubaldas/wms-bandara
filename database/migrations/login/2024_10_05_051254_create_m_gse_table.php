<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMGseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_gse', function (Blueprint $table) {
            $table->bigInteger('_id');
            $table->string('EquipmentCode', 12);
            $table->string('EquipmentName', 50)->nullable();
            $table->string('EquipmentUtilisasi', 50)->nullable();
            $table->string('rental_unit', 5);
            $table->integer('void')->default(0);
            $table->timestamp('created_at')->default('current_timestamp()');

            $table->primary(['_id', 'EquipmentCode']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_gse');
    }
}
