<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CarrierInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrier_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('carrier_name');
            $table->string('carrier_address');
            $table->string('carrier_city');
            $table->string('carrier_country');
            $table->string('carrier_ZIP');
           
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
        Schema::dropIfExists('carrier_info');
    }
}
