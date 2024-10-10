<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTdInboundDeliveryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('td_inbound_delivery', function (Blueprint $table) {
            $table->bigInteger('id_')->primary();
            $table->bigInteger('id_header')->index('id_header');
            $table->string('status_date', 10)->nullable()->index('status_date');
            $table->string('status_time', 8)->nullable()->index('status_time');
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
        Schema::dropIfExists('td_inbound_delivery');
    }
}
