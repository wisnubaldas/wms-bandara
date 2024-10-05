<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstCountryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_country', function (Blueprint $table) {
            $table->bigInteger('Noid')->nullable()->index('ix_MasterCountry_autoinc');
            $table->string('CountryCode', 2)->nullable();
            $table->string('CountryName', 35)->nullable();
            $table->integer('void')->default(0);
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
        Schema::dropIfExists('mst_country');
    }
}
