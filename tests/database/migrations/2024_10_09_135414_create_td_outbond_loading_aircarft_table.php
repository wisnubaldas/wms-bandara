<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTdOutbondLoadingAircarftTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('td_outbond_loading_aircarft', function (Blueprint $table) {
            $table->bigInteger('id_')->primary();
            $table->bigInteger('id_header');
            $table->string('status_date', 10)->nullable();
            $table->string('status_time', 8)->nullable();
            $table->boolean('_is_active')->default(1);
            $table->string('_created_by', 120);
            $table->timestamp('_created_at')->default('current_timestamp()');
            $table->string('_updated_by', 120)->nullable();
            $table->timestamp('_updated_at')->default('0000-00-00 00:00:00');
            $table->text('_remarks_last_update')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('td_outbond_loading_aircarft');
    }
}
