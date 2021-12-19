<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrencyExchangeReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currency_exchange_report', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('currncey_id');
            $table->foreign('currncey_id')->references('id')->on('currncey')->onDelete('cascade')->onUpdate('cascade');
            $table->string('date');
            $table->string('currency_value');
            $table->string('usa_dollar_value');
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
        Schema::dropIfExists('currency_exchange_report');
    }
}
