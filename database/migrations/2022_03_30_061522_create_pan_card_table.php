<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePanCardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pan_card', function (Blueprint $table) {
            $table->integer('sl_no', true);
            $table->string('Id', 100)->unique('customer_id');
            $table->string('Application_Type', 50);
            $table->date('Received_Date');
            $table->string('Name', 250);
            $table->date('DOB');
            $table->string('Mobile_No', 200);
            $table->string('Ack_No', 100)->nullable();
            $table->string('Pan_No', 50)->nullable();
            $table->string('Status', 100);
            $table->date('Delivered_Date')->nullable();
            $table->integer('Total_Amount');
            $table->integer('Amount_Paid');
            $table->integer('Balance');
            $table->string('Payment_Mode', 50);
            $table->string('Recycle_Bin', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pan_card');
    }
}
