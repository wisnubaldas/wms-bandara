<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEksDokcustomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eks_dokcustom', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('MasterAWB', 15)->nullable()->index('MasterAWB');
            $table->string('HostAWB', 25)->nullable()->index('HostAWB');
            $table->string('KD_DOC', 2)->default('6');
            $table->string('PEB', 20)->nullable();
            $table->string('KTKR', 6)->nullable();
            $table->string('DateOfPEB', 10)->nullable();
            $table->string('HSCode', 8)->nullable();
            $table->string('ShipperCode', 19)->nullable();
            $table->string('ConsigneeCode', 19)->nullable();
            $table->string('AgenCode', 19)->nullable();
            $table->string('TransferPDE', 1)->nullable();
            $table->string('InvoiceNumber', 19)->nullable()->index('InvoiceNumber');
            $table->string('DateEntry', 10)->nullable()->index('DateEntry');
            $table->string('TimeEntry', 8)->nullable();
            $table->boolean('void')->default(0);
            $table->string('token', 5)->nullable();
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
        Schema::dropIfExists('eks_dokcustom');
    }
}
