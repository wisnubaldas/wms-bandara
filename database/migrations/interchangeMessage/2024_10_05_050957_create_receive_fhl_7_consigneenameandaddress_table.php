<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiveFhl7ConsigneenameandaddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receive_fhl_7_consigneenameandaddress', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('MessageKey', 80);
            $table->string('MessageLineNo', 3)->nullable();
            $table->string('LineIdentifier', 3)->nullable();
            $table->string('Name', 35)->nullable();
            $table->string('StreetAddress', 35)->nullable();
            $table->string('Place', 17)->nullable();
            $table->string('State', 9)->nullable();
            $table->string('CountryCode', 2)->nullable();
            $table->string('PostCode', 9)->nullable();
            $table->string('ContactIdentifier', 3)->nullable();
            $table->string('ContactNumber', 25)->nullable();
            $table->timestamp('created_at')->default('current_timestamp()');

            $table->primary(['id', 'MessageKey']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receive_fhl_7_consigneenameandaddress');
    }
}
