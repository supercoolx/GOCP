<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCpPayment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cp_payment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('carrier_info_id');
            $table->foreign('carrier_info_id')->references('id')->on('carrier_info')->onDelete('cascade')->onUpdate('cascade');
            $table->string('time_range');
            $table->string('whatsapp_mints');
            $table->string('gsm_mints');
            $table->string('create_payment');
            $table->string('status')->nullable();
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
        Schema::dropIfExists('cp_payment');
    }
}
