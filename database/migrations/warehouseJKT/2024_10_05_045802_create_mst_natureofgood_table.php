<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstNatureofgoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_natureofgood', function (Blueprint $table) {
            $table->bigInteger('noid');
            $table->string('nat_code', 6);
            $table->string('nat_description', 45);
            $table->unsignedTinyInteger('void')->default(0);
            $table->timestamp('created_at')->default('current_timestamp()');

            $table->primary(['noid', 'nat_code']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mst_natureofgood');
    }
}
