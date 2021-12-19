<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Carrierinvoice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('carrier_invoice', function (Blueprint $table) {
            $table->bigIncrements('id');
            
          
            $table->unsignedBigInteger('carrier_buy_rout_id');
            $table->foreign('carrier_buy_rout_id')->references('id')->on('carrier_buy_rout')->onDelete('cascade')->onUpdate('cascade');
            $table->string('time_range');
            $table->string('total_mints');
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
         Schema::dropIfExists('carrier_invoice');
    }
}
