<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CarrierBuy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('carrier_buy', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
          
            $table->unsignedBigInteger('route_sale_price_id');
            $table->foreign('route_sale_price_id')->references('id')->on('route_sale_price')->onDelete('cascade')->onUpdate('cascade');
            $table->string('sc_commission');
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
         Schema::dropIfExists('carrier_buy');
    }
}
