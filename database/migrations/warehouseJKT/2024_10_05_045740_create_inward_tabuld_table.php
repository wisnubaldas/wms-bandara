<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInwardTabuldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inward_tabuld', function (Blueprint $table) {
            $table->decimal('ID', 18, 0);
            $table->string('lable', 5)->nullable();
            $table->string('sequence', 4)->nullable();
            $table->string('containernum', 20)->nullable();
            $table->string('containersize', 2)->nullable();
            $table->string('containerloadtype', 1)->nullable();
            $table->string('containertype', 2)->nullable();
            $table->string('awbno', 20)->nullable();
            $table->string('Cetak', 1)->nullable();
            $table->boolean('void')->default(0);
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
        Schema::dropIfExists('inward_tabuld');
    }
}
