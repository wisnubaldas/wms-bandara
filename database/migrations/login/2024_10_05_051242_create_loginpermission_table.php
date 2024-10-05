<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoginpermissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loginpermission', function (Blueprint $table) {
            $table->increments('noid');
            $table->string('EmployeeNumber', 10)->default('NONUMBER');
            $table->string('databaseName', 45)->default('');
            $table->string('JenisGudang', 3)->nullable();
            $table->string('DepartmenCode', 3);
            $table->string('FormCodeAccess', 345);
            $table->string('DateFrom', 10);
            $table->string('DateUntil', 10);
            $table->boolean('flag_open')->default(0);
            $table->boolean('flag_insert')->default(0);
            $table->boolean('flag_update')->default(0);
            $table->boolean('flag_delete')->default(0);
            $table->boolean('flag_print')->default(0);
            $table->boolean('flag_select')->default(0);
            $table->boolean('flag_upload')->default(0);
            $table->boolean('flag_download')->default(0);
            $table->unsignedTinyInteger('Void')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loginpermission');
    }
}
