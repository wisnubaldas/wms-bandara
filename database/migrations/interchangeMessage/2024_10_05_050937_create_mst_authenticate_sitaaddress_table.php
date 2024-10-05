<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstAuthenticateSitaaddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_authenticate_sitaaddress', function (Blueprint $table) {
            $table->integer('NumberId')->index('NumberId');
            $table->string('DefaultHost', 3)->nullable();
            $table->string('AirlineCode', 2)->nullable();
            $table->string('Route', 3)->nullable();
            $table->string('Recipient', 10)->nullable();
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
        Schema::dropIfExists('mst_authenticate_sitaaddress');
    }
}
