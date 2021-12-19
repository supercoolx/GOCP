<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Buyerinfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('buyer_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('first_name');
            $table->string('middle_name');
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
        Schema::dropIfExists('buyer_info');
    }
}
