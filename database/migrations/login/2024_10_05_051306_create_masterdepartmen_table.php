<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterdepartmenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masterdepartmen', function (Blueprint $table) {
            $table->string('DepartmenCode', 5)->nullable();
            $table->string('DepartmenName', 50)->nullable();
            $table->string('CaptionForm', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('masterdepartmen');
    }
}
