<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstHarmonizedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_harmonized', function (Blueprint $table) {
            $table->bigInteger('Noid')->index('ix_InternGroupHarmonizedSystem_autoinc');
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
        Schema::dropIfExists('mst_harmonized');
    }
}
