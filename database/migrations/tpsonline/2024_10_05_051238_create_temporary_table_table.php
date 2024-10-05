<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemporaryTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temporary_table', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('hawb', 128)->nullable()->unique('hawb');
            $table->string('punya', 20)->nullable();
            $table->enum('flag_tarik', ['0', '1', '2'])->default('0')->comment("1 selesai tarik cas&xsys, 2 selesai tarik aei");
            $table->string('mawb', 128)->nullable();
            $table->varbinary('bc11', 128)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temporary_table');
    }
}
