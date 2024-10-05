<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstPlaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_place', function (Blueprint $table) {
            $table->integer('Noid')->primary();
            $table->string('CountryCode', 2)->nullable()->index('CountryCode');
            $table->string('PlaceCode', 3)->nullable();
            $table->string('PlaceName', 35)->nullable();
            $table->integer('Void')->default(0);
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
        Schema::dropIfExists('mst_place');
    }
}
