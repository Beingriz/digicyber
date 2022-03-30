<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDebitLedgerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debit_ledger', function (Blueprint $table) {
            $table->string('Id', 250)->primary();
            $table->string('Client_Id', 250);
            $table->date('Date');
            $table->integer('Source');
            $table->integer('Total_Amount');
            $table->integer('Amount_Paid');
            $table->integer('Balance');
            $table->string('Description', 300);
            $table->string('Payment_Mode', 50);
            $table->string('Attachment', 250);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('debit_ledger');
    }
}
