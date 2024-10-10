<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeteksporPkbeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('getekspor_pkbe', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('HAWB', 20)->nullable();
            $table->string('CAR', 50)->nullable();
            $table->string('NOPKBE', 20)->nullable();
            $table->string('TGLPKBE', 10)->nullable();
            $table->string('NPWP_EKS', 30)->nullable();
            $table->string('NAMA_EKS', 100)->nullable();
            $table->string('NO_CONT', 25)->nullable();
            $table->string('SIZE', 20)->nullable();
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
        Schema::dropIfExists('getekspor_pkbe');
    }
}
