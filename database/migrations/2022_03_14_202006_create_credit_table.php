<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('invoice_id')->unique();
            $table->bigInteger('invoice_no')->unique();
            $table->date('credit_date')->nullable();
            $table->integer('amount')->nullable();
            $table->longtext('repayment')->nullable();
            $table->timestamps();

            $table->foreign('invoice_id')->references('id')->on('invoice')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('credit');
    }
}