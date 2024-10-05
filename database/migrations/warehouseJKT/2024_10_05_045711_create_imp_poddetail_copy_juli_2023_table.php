<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpPoddetailCopyJuli2023Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imp_poddetail_copy_juli_2023', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('TravelNumber', 20)->nullable()->index('TravelNumber');
            $table->string('InvoiceNumber', 20)->nullable()->index('InvoiceNumber');
            $table->string('MasterAWB', 20)->nullable()->index('MasterAWB');
            $table->string('HostAWB', 50)->nullable()->index('HostAWB');
            $table->string('KindOfGood', 50)->nullable();
            $table->integer('Pieces')->nullable();
            $table->double('Netto')->nullable();
            $table->double('Volume')->nullable();
            $table->string('token', 5)->nullable()->index('token');
            $table->boolean('void')->default(0);
            $table->timestamp('created_at')->default('current_timestamp()')->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imp_poddetail_copy_juli_2023');
    }
}
