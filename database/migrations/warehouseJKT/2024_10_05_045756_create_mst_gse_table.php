<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstGseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_gse', function (Blueprint $table) {
            $table->string('EquipmentCode', 12)->primary();
            $table->string('EquipmentName', 50)->nullable();
            $table->string('EquipmentUtilisasi', 50)->nullable();
            $table->string('rental_unit', 5);
            $table->integer('void')->default(0);
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
        Schema::dropIfExists('mst_gse');
    }
}
