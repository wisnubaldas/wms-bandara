<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTOriginalManifestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_original_manifest', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('token', 100);
            $table->longText('data_json');
            $table->dateTime('data_datetime');
            $table->string('ipaccess', 100);
            $table->integer('flag_generate')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_original_manifest');
    }
}
