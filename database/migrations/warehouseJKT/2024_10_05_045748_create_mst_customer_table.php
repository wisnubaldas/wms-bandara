<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_customer', function (Blueprint $table) {
            $table->bigInteger('_id')->index('_id');
            $table->string('CustomerCode', 20)->index('CustomerCode');
            $table->string('CompanyName', 100)->nullable()->index('CompanyName');
            $table->string('PICName', 50)->nullable();
            $table->string('Address1', 60)->nullable();
            $table->string('Address2', 60)->nullable();
            $table->string('City', 50)->nullable();
            $table->string('PostCode', 8)->nullable();
            $table->string('CountryCode', 2)->nullable();
            $table->string('MobileNumber', 20)->nullable();
            $table->string('FaxNumber', 20)->nullable();
            $table->string('Phonenumber', 20)->nullable();
            $table->string('EmailAddress', 75)->nullable();
            $table->string('NPWPNumber', 25)->nullable();
            $table->string('ContactIdentifier', 3)->nullable();
            $table->string('ContactNumber', 50)->nullable();
            $table->string('EmployeeNumber', 10)->nullable();
            $table->boolean('flag_faktur')->default(0);
            $table->boolean('Dom_member')->default(0);
            $table->boolean('int_member')->default(1);
            $table->string('DateEntry', 10)->nullable();
            $table->string('TimeEntry', 8)->nullable();
            $table->boolean('void')->default(0)->index('void');
            $table->timestamp('created_at')->default('current_timestamp()');

            $table->primary(['_id', 'CustomerCode']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mst_customer');
    }
}
