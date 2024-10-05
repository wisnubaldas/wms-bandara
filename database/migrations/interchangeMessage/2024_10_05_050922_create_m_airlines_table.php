<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMAirlinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_airlines', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('airlines_code', 2)->nullable();
            $table->string('airlines_name', 50)->nullable();
            $table->boolean('active')->default(1);
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
        Schema::dropIfExists('m_airlines');
    }
}
