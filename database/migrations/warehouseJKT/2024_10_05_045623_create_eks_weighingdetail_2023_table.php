<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEksWeighingdetail2023Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eks_weighingdetail_2023', function (Blueprint $table) {
            $table->integer('noid')->primary();
            $table->string('ProofNumber', 18)->nullable()->index('ProofNumber');
            $table->string('MasterAWB', 15)->index('MasterAWB');
            $table->string('HostAWB', 25)->nullable()->index('HostAWB');
            $table->unsignedInteger('Pieces')->nullable();
            $table->decimal('Pallet', 10, 2)->nullable();
            $table->decimal('GrossWeight', 10, 2)->nullable();
            $table->decimal('NettoWeight', 10, 2)->nullable();
            $table->unsignedInteger('LongCargo')->nullable();
            $table->unsignedInteger('WidthCargo')->nullable();
            $table->unsignedInteger('HighCargo')->nullable();
            $table->decimal('VolumeCargo', 10, 2)->nullable();
            $table->decimal('CAW', 10, 2)->nullable();
            $table->string('StorageRoom', 2)->nullable();
            $table->string('DG', 2)->nullable();
            $table->string('KindOfCode', 5)->nullable();
            $table->string('KindOfNature', 50)->nullable();
            $table->boolean('BuildUpFlag')->default(0);
            $table->string('DateEntry', 10)->nullable()->index('DateEntry');
            $table->string('TimeEntry', 8)->nullable()->index('TimeEntry');
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
        Schema::dropIfExists('eks_weighingdetail_2023');
    }
}
