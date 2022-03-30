<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAadharCardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aadhar_card', function (Blueprint $table) {
            $table->integer('sl_no', true);
            $table->string('customer_id', 50)->unique('customer_id');
            $table->string('correction_type', 50);
            $table->date('received_date');
            $table->string('customer_name', 100);
            $table->date('dob');
            $table->string('mobile_no', 200);
            $table->string('aadhar_no', 250);
            $table->string('urn_no', 250);
            $table->string('suporting_document', 100);
            $table->string('status', 100);
            $table->date('applied_on');
            $table->date('delivered_on');
            $table->integer('amount_paid');
            $table->integer('balance');
            $table->string('payment_mode', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aadhar_card');
    }
}
