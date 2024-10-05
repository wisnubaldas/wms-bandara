<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMNatureofgoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_natureofgood', function (Blueprint $table) {
            $table->integer('_id');
            $table->string('nat_code', 6);
            $table->string('nat_description', 45);
            $table->unsignedTinyInteger('void')->default(0);
            $table->timestamp('created_at')->default('current_timestamp()');
            
            $table->primary(['_id', 'nat_code']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_natureofgood');
    }
}
