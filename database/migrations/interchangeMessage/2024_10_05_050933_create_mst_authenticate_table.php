<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstAuthenticateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_authenticate', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('DefaultHost', 3);
            $table->string('AirlineCode', 2)->nullable();
            $table->string('Priority', 10)->nullable();
            $table->string('DoubleSig', 10)->nullable();
            $table->string('EmailSender', 50)->nullable();
            $table->integer('EmailSending')->nullable();
            $table->string('SITASender', 10)->nullable();
            $table->integer('SitaSending')->nullable();
            $table->integer('Activation')->nullable();
            $table->string('DirectoryEkspor', 50)->nullable();
            $table->string('DirectoryImport', 50)->nullable();
            $table->string('EmployeeNumber', 10)->nullable();
            $table->string('DateEntry', 10)->nullable();
            $table->string('TimeEntry', 8)->nullable();
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
        Schema::dropIfExists('mst_authenticate');
    }
}
