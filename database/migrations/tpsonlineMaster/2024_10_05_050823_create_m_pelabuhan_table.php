<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMPelabuhanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_pelabuhan', function (Blueprint $table) {
            $table->string('kdport')->nullable()->index('kdport');
            $table->string('nmport')->nullable();
            $table->boolean('void')->default(0);
            $table->string('/*', 128)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_pelabuhan');
    }
}
