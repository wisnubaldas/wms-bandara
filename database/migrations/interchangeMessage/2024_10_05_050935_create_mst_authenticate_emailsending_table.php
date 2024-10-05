<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstAuthenticateEmailsendingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_authenticate_emailsending', function (Blueprint $table) {
            $table->integer('NumberId')->index('NumberId');
            $table->string('DefaultHost', 3)->nullable();
            $table->string('AirlineCode', 2)->nullable();
            $table->string('Route', 3)->nullable();
            $table->string('Recipient', 50)->nullable();
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
        Schema::dropIfExists('mst_authenticate_emailsending');
    }
}
