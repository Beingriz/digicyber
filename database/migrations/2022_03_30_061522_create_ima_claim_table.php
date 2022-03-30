<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImaClaimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ima_claim', function (Blueprint $table) {
            $table->integer('sl_no', true);
            $table->string('customer_id', 100)->unique('customer_id');
            $table->string('scheme', 50);
            $table->date('received_date');
            $table->string('customer_name', 200);
            $table->date('dob');
            $table->string('mobile_no', 200);
            $table->string('address', 250);
            $table->string('cms_no', 50);
            $table->string('pan_no', 50);
            $table->string('ima_id', 50);
            $table->string('claim_amount', 50);
            $table->integer('amount_approved');
            $table->string('status', 50);
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
        Schema::dropIfExists('ima_claim');
    }
}
