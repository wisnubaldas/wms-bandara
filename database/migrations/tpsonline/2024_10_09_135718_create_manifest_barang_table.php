<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManifestBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manifest_barang', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('id_barang', 30)->index('id_barang');
            $table->string('id_detail', 30)->nullable()->index('id_detail');
            $table->integer('seri_barang')->nullable();
            $table->string('hs_code', 8)->nullable();
            $table->string('uraian_barang', 200)->nullable();
            $table->string('token', 5)->nullable()->index('token');
            
            $table->primary(['id', 'id_barang']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manifest_barang');
    }
}
