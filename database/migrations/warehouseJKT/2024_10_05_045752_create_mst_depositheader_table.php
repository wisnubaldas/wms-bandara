<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstDepositheaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_depositheader', function (Blueprint $table) {
            $table->string('DepositCode', 20)->primary();
            $table->string('DepositPIC', 50)->nullable();
            $table->string('PhoneNumber', 20)->nullable();
            $table->string('EmailAddress', 50)->nullable();
            $table->string('NPWP', 50)->nullable();
            $table->string('DateOfJoin', 10)->nullable();
            $table->double('TotalNominal')->nullable();
            $table->integer('Active')->default(1);
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
        Schema::dropIfExists('mst_depositheader');
    }
}
