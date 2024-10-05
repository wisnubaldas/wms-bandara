<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDtpropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dtproperties', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('objectid')->nullable();
            $table->string('property', 64);
            $table->string('value')->nullable();
            $table->string('uvalue')->nullable();
            $table->longblob('lvalue')->nullable();
            $table->integer('version');
            
            $table->primary(['id', 'property']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dtproperties');
    }
}
