<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTTransStorageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_trans_storage', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('uld_code', 50)->nullable();
            $table->string('airlines_code', 2)->nullable();
            $table->bigInteger('id_rack')->nullable();
            $table->date('date_from')->nullable();
            $table->date('date_until')->nullable();
            $table->bigInteger('id_order')->nullable();
            $table->string('order_no', 15)->nullable();
            $table->bigInteger('id_invoice')->nullable();
            $table->string('invoice_no', 15)->nullable();
            $table->enum('flag_status', ['O', 'C', 'M'])->nullable()->comment('OPEN/CLOSE/MOVE');
            $table->boolean('void')->default(0);
            $table->timestamp('created_at')->default('current_timestamp()');
            $table->timestamp('update_at')->nullable()->default('current_timestamp()');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_trans_storage');
    }
}
