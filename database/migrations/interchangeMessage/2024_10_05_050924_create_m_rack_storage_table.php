<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMRackStorageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_rack_storage', function (Blueprint $table) {
            $table->integer('id_rack')->primary();
            $table->string('rack_code', 15)->nullable();
            $table->string('rack_name', 50)->nullable();
            $table->string('status', 5)->nullable();
            $table->boolean('void')->default(0);
            $table->timestamp('created_at')->nullable()->default('current_timestamp()');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_rack_storage');
    }
}
