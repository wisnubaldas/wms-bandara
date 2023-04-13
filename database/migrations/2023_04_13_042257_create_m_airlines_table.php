<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_airlines', function (Blueprint $table) {
            $table->id();
            $table->string('two_letter_code');
            $table->string('tree_letter_code');
            $table->string('country_code');
            $table->boolean('active')->default(1);
            $table->boolean('void')->default(0);
            $table->timestamps();
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
};
