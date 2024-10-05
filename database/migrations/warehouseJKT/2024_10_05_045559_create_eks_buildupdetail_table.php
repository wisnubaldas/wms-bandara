<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEksBuildupdetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eks_buildupdetail', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('BuildUpNumber', 18)->nullable()->index('BuildUpNumber');
            $table->string('MasterAWB', 15)->nullable()->index('MasterAWB');
            $table->char('Parsial', 1)->nullable();
            $table->string('TransitCode', 3)->nullable();
            $table->integer('PartPieces')->nullable();
            $table->integer('Pieces')->nullable();
            $table->double('PartNetto')->nullable();
            $table->double('Netto')->nullable();
            $table->double('Volume')->nullable();
            $table->string('UldCardNumber', 15)->nullable()->index('UldCardNumber');
            $table->string('KindOfGood', 50)->nullable();
            $table->string('EmployeeNumber', 10)->nullable();
            $table->string('AgenCode', 19)->nullable();
            $table->string('condition', 50)->nullable();
            $table->string('OverLoadCode', 1)->nullable();
            $table->string('DONumber', 18)->nullable();
            $table->string('Remarks', 25)->nullable();
            $table->string('OfficialUse', 25)->nullable();
            $table->integer('PrintNumber')->default(0);
            $table->string('DateEntry', 10)->nullable();
            $table->string('TimeEntry', 8)->nullable();
            $table->boolean('FFM')->default(0);
            $table->boolean('void')->default(0);
            $table->string('token', 5)->default('71901');
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
        Schema::dropIfExists('eks_buildupdetail');
    }
}
