<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThOutbondTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('th_outbond', function (Blueprint $table) {
            $table->bigInteger('id_')->primary();
            $table->string('tps', 4)->nullable();
            $table->enum('gate_type', ['ekspor', 'outgoing']);
            $table->string('waybill_smu', 15)->nullable();
            $table->string('hawb', 25)->nullable();
            $table->integer('koli')->nullable();
            $table->decimal('netto', 10, 2)->nullable();
            $table->decimal('volume', 10, 2)->nullable();
            $table->string('kindofgood', 100)->nullable();
            $table->string('airline_code', 2)->nullable();
            $table->string('flight_no', 7)->nullable();
            $table->string('origin', 5)->nullable();
            $table->string('transit', 5)->nullable();
            $table->string('dest', 5)->nullable();
            $table->string('shipper_name', 120)->nullable();
            $table->string('consignee_name', 120)->nullable();
            $table->boolean('_is_active')->default(1);
            $table->string('_created_by', 120)->nullable();
            $table->timestamp('_created_at')->default('current_timestamp()');
            $table->string('_updated_by', 120)->nullable();
            $table->timestamp('_updated_at')->default('0000-00-00 00:00:00');
            $table->text('_remarks_last_update')->nullable();
            $table->integer('key_upload')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('th_outbond');
    }
}
