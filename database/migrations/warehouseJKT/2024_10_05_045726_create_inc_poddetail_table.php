<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncPoddetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inc_poddetail', function (Blueprint $table) {
            $table->bigInteger('_id')->primary();
            $table->bigInteger('id_header');
            $table->string('pod_number', 20)->nullable();
            $table->bigInteger('id_invoice')->nullable();
            $table->string('invoicenumber', 20)->nullable();
            $table->string('MasterAWB', 15)->nullable();
            $table->string('KindOfgood', 50)->nullable();
            $table->integer('Pieces')->nullable();
            $table->decimal('Netto', 10, 2)->nullable();
            $table->decimal('Volume', 10, 2)->nullable();
            $table->boolean('Posting')->default(0);
            $table->string('token', 5)->nullable();
            $table->boolean('void')->default(0);
            $table->timestamp('created_at')->default('current_timestamp()');
            $table->timestamp('modify_at')->default('current_timestamp()');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inc_poddetail');
    }
}
