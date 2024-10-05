<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInwardFedexFirstTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inward_fedex_first', function (Blueprint $table) {
            $table->bigInteger('awb');
            $table->bigInteger('mawb')->nullable();
            $table->string('flight_no', 7)->nullable();
            $table->string('flight_date', 10)->nullable();
            $table->string('ship_date', 10)->nullable();
            $table->bigInteger('cid')->nullable();
            $table->string('npwp', 30)->nullable();
            $table->char('service', 3)->nullable();
            $table->char('nondoc', 1);
            $table->char('origin', 3)->nullable();
            $table->char('destin', 3)->nullable();
            $table->bigInteger('shipper_account');
            $table->string('shipper_name', 30)->nullable();
            $table->string('shipper_company', 100)->nullable();
            $table->string('shipper_address1', 40)->nullable();
            $table->string('shipper_address2', 40)->nullable();
            $table->string('shipper_city', 30)->nullable();
            $table->string('shipper_state', 30)->nullable();
            $table->char('shipper_country_id', 3)->nullable();
            $table->string('shipper_zip', 10)->nullable();
            $table->string('shipper_phone', 20)->nullable();
            $table->bigInteger('consignee_account')->nullable();
            $table->string('consignee_name', 30)->nullable();
            $table->string('consignee_company', 100)->nullable();
            $table->string('consignee_address1', 50)->nullable();
            $table->string('consignee_address2', 50)->nullable();
            $table->string('consignee_city', 30)->nullable();
            $table->char('consignee_city_id', 3)->nullable();
            $table->string('consignee_state', 30)->nullable();
            $table->char('consignee_country_id', 3)->nullable();
            $table->string('consignee_zip', 10)->nullable();
            $table->string('consignee_phone', 20)->nullable();
            $table->integer('tot_package');
            $table->double('tot_weight');
            $table->double('tot_dimensi');
            $table->double('tot_value');
            $table->double('actual_weight')->nullable();
            $table->char('currency', 3)->nullable();
            $table->string('description', 200)->nullable();
            $table->string('hs_code_id', 15)->nullable();
            $table->char('inout', 1)->nullable();
            $table->char('bill_dt', 2)->nullable();
            $table->string('bill_dt_account', 12)->nullable();
            $table->char('bill_tc', 2)->nullable();
            $table->string('bill_tc_account', 12)->nullable();
            $table->string('custom_id', 25)->nullable();
            $table->char('flag_missroute', 1)->nullable();
            $table->char('recons', 2);
            $table->char('flag_isqs', 1);
            $table->char('flag_one_day_service', 1);
            $table->char('flag_postal_code', 1);
            $table->char('flag_check', 1);
            $table->char('flag_hold_by_customs', 1);
            $table->char('flag_edit_status', 1);
            $table->string('flag_edit_name', 20);
            $table->char('flag_mix', 1);
            $table->char('flag_npik', 1);
            $table->char('flag_ifr', 1)->nullable();
            $table->char('flag_fesdc', 1);
            $table->char('flag_sht', 1);
            $table->char('flag_whs_charges', 1);
            $table->char('ics_type_id', 3)->nullable();
            $table->char('ics_duty_tax', 1)->nullable();
            $table->integer('clearance_type_id')->nullable();
            $table->smallInteger('payment_type_id')->nullable();
            $table->char('prior_day', 1);
            $table->char('to_day', 1);
            $table->string('arrival', 4)->nullable();
            $table->string('register_no', 10)->nullable();
            $table->string('register_date', 10)->nullable();
            $table->dateTime('run_datetime')->nullable();
            $table->integer('bc_11')->nullable();
            $table->string('bc_11_date', 10)->nullable();
            $table->integer('bc_pos_no')->nullable();
            $table->integer('bc_sub_pos_no')->nullable();
            $table->string('user_updated', 20)->nullable();
            $table->string('datetime_updated', 10);
            $table->string('flag_proses', 50)->nullable();
            $table->string('InvoiceNumber', 16)->nullable();
            $table->integer('flag_pod')->nullable();
            $table->integer('flag_do')->nullable();
            $table->integer('flag_Global')->nullable();
            $table->integer('Void')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inward_fedex_first');
    }
}
