<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Accountantinfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('accountant_info', function (Blueprint $table) {
            $table->bigIncrements('id');
           
            $table->string('accountant_first_name');
            $table->string('accountant_middle_name');
            $table->string('accountant_last_name');
            $table->string('accountant_cell_number');
            $table->string('accountant_email');
            $table->string('accountant_skype');
            $table->string('accountant_whatsapp');
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
         Schema::dropIfExists('accountant_info');
    }
}
