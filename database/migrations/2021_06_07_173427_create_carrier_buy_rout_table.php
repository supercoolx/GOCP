<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrierBuyRoutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrier_buy_rout', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('carrier_by_rout_name');
               $table->unsignedBigInteger('cellular_companies_id');
            $table->foreign('cellular_companies_id')->references('id')->on('cellular_companies')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('carrier_id');
            $table->foreign('carrier_id')->references('id')->on('carrier_info')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('route_sale_price_id');
            $table->foreign('route_sale_price_id')->references('id')->on('route_sale_price')->onDelete('cascade')->onUpdate('cascade');

            $table->string('sc_commision');
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
        Schema::dropIfExists('carrier_buy_rout');
    }
}
