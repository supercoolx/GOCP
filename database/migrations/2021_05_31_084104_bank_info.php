<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BankInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('bank_info', function (Blueprint $table) {
            $table->bigIncrements('id');
           
            $table->string('bank_name');
            $table->string('bank_address');
            $table->string('bank_city');
            $table->string('bank_country');
            $table->string('bank_ZIP');
            $table->string('bank_phone');
            $table->string('bank_email');
            $table->string('bank_swift');
            $table->string('bank_account_email');
            $table->string('bank_account_number');
            $table->string('bank_ACH');
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
          Schema::dropIfExists('bank_info');
    }
}
