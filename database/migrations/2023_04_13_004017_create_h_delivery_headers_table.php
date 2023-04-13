<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_delivery_headers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('consignee_id');
            $table->bigInteger('employee_id');
            $table->bigInteger('invoice_id');
            $table->string('do_number');
            $table->string('mawb');
            $table->integer('bc_11');
            $table->date('tgl_bc_11');
            $table->integer('no_pos');
            $table->integer('tot_pieces');
            $table->integer('tot_netto');
            $table->integer('tot_volume');
            $table->string('pic_name');
            $table->date('do_date');
            $table->time('do_time');
            $table->integer('print');
            $table->string('shift_code');
            $table->string('clearance_type');
            $table->boolean('nondoc')->default(0);
            $table->date('date_of_out');
            $table->boolean('flag_pod')->default(0);
            $table->boolean('void')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('h_delivery_headers');
    }
};
