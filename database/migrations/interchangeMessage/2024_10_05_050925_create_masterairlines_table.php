<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterairlinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masterairlines', function (Blueprint $table) {
            $table->decimal('NoID', 18, 0);
            $table->string('AirlinesCode', 2)->nullable();
            $table->string('AirlinesPrefix', 3)->nullable();
            $table->string('CountryCode', 2)->nullable();
            $table->string('airlinesName', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('masterairlines');
    }
}
