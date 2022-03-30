<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoteridCardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voterid_card', function (Blueprint $table) {
            $table->integer('sl_no', true);
            $table->string('customer_id', 250)->unique('customer_id');
            $table->string('customer_name', 100);
            $table->string('relation_name', 100);
            $table->string('mobile_no', 200);
            $table->date('applied_on');
            $table->string('ack_no', 100);
            $table->string('application_type', 100);
            $table->string('status', 100);
            $table->string('id_card_no', 200);
            $table->string('reason', 200);
            $table->integer('amount_paid');
            $table->integer('balance');
            $table->string('payment_mode', 50);
            $table->date('delivered_on');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voterid_card');
    }
}
