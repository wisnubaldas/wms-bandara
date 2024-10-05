<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMastertpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mastertps', function (Blueprint $table) {
            $table->string('TPScode', 5)->default('');
            $table->string('TPSName', 50)->default('');
            $table->string('TPSNPWP', 20)->nullable();
            $table->string('plppassword', 30)->default('');
            $table->string('gatepassword', 30)->default('');
            $table->string('TPSportname', 5)->nullable();
            $table->unsignedTinyInteger('active')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mastertps');
    }
}
