<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpSppbEcommerceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imp_sppb_ecommerce', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('mawb', 15)->nullable()->index('mawb');
            $table->string('hawb', 20)->nullable()->index('hawb');
            $table->string('sppb', 30)->nullable()->index('sppb');
            $table->string('type_clearance', 10)->nullable();
            $table->string('tanggal', 10)->nullable()->index('tanggal');
            $table->boolean('fl_gateout')->default(0);
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
        Schema::dropIfExists('imp_sppb_ecommerce');
    }
}
