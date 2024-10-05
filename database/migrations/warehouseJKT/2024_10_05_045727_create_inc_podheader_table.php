<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncPodheaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inc_podheader', function (Blueprint $table) {
            $table->bigInteger('_id')->primary();
            $table->string('pod_number', 18)->nullable();
            $table->bigInteger('id_invoice')->nullable();
            $table->string('InvoiceNumber', 20)->nullable();
            $table->string('Referensi', 10)->nullable();
            $table->string('DateOfOut', 10)->nullable();
            $table->string('TimeOfOut', 5)->nullable();
            $table->string('EmployeeNumber', 10)->nullable();
            $table->bigInteger('id_consignee')->nullable();
            $table->string('CustomerCode', 19)->nullable();
            $table->boolean('void')->default(0);
            $table->string('token', 5)->nullable();
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
        Schema::dropIfExists('inc_podheader');
    }
}
