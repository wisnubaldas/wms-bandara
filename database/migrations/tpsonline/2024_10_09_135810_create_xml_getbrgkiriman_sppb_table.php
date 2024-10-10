<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXmlGetbrgkirimanSppbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xml_getbrgkiriman_sppb', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->bigInteger('xml_code')->index('xml_code');
            $table->text('xml')->nullable();
            $table->timestamp('created_at')->nullable()->default('current_timestamp()');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xml_getbrgkiriman_sppb');
    }
}
