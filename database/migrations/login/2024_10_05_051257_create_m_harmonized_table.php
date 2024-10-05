<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMHarmonizedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_harmonized', function (Blueprint $table) {
            $table->bigInteger('_id')->index('ix_InternGroupHarmonizedSystem_autoinc');
            $table->string('HSGroup', 5)->nullable();
            $table->string('DescriptionHSGRoup', 100)->nullable();
            $table->string('HSCode', 5);
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
        Schema::dropIfExists('m_harmonized');
    }
}
