<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpPodheaderCopyJuli2023Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imp_podheader_copy_juli_2023', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('TravelNumber', 20);
            $table->string('InvoiceNumber', 20)->nullable()->index('InvoiceNumber');
            $table->string('Referensi', 10)->nullable();
            $table->string('DateOfOut', 10)->nullable()->index('DateOfOut');
            $table->string('TimeOfOut', 8)->nullable();
            $table->string('EmployeeNumber', 10)->nullable();
            $table->string('ConsigneeCode', 19)->nullable();
            $table->boolean('DLV')->default(0);
            $table->boolean('void')->default(0);
            $table->string('token', 5)->nullable()->index('token');
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
        Schema::dropIfExists('imp_podheader_copy_juli_2023');
    }
}
