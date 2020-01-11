<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->string('custid',10)->primary();
            $table->string('name');
            $table->string('mobile');
            $table->string('email');
            $table->string('pass_type');
            $table->string('numbers_pass');
            $table->string('select_day');
            $table->string('payable_total');
            $table->string('razor_payid')->default('0');            
            $table->string('razor_orderid')->default('0');
            $table->string('razorpay_signature')->default('0');
            $table->string('payment_status')->default('0');
            $table->string('instatus')->default('0');           
            $table->string('indates')->default('0');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
