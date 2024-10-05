<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInoutWardIdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inout_ward_id', function (Blueprint $table) {
            $table->integer('NoID')->primary();
            $table->string('DescriptionCode', 50)->nullable();
            $table->decimal('QueveNumber', 18, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inout_ward_id');
    }
}
