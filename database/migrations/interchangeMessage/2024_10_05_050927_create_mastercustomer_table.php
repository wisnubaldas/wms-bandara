<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMastercustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mastercustomer', function (Blueprint $table) {
            $table->decimal('NumberID', 18, 0);
            $table->string('CustomerCode', 50)->nullable();
            $table->string('CustomerAccount', 14)->nullable();
            $table->string('CustomerName', 35)->nullable();
            $table->string('CustomerAddress', 35)->nullable();
            $table->string('CustomerPlace', 17)->nullable();
            $table->string('CustomerState', 9)->nullable();
            $table->string('CustomerISOCountryCode', 2)->nullable();
            $table->string('CustomerPostCode', 9)->nullable();
            $table->string('CustomerContactIdentifier', 3)->nullable();
            $table->string('CustomerContactNumber', 25)->nullable();
            $table->string('CustomerIATACode', 7)->nullable();
            $table->string('CustomerIATACASS', 4)->nullable();
            $table->string('void', 1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mastercustomer');
    }
}
