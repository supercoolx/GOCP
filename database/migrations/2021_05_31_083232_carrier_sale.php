<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CarrierSale extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrier_sales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_name');
           
            $table->string('password');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('cell_number');
            $table->string('email');
            $table->string('skype');
            $table->string('whatsapp');
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
        Schema::dropIfExists('carrier_sales');
    }
}
