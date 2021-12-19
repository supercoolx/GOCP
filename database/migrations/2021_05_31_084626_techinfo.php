<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Techinfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tech_info', function (Blueprint $table) {
            $table->bigIncrements('id');
           
            $table->string('tech_first_name');
            $table->string('tech_middle_name');
            $table->string('tech_last_name');
            $table->string('tech_cell_number');
            $table->string('tech_email');
            $table->string('tech_skype');
            $table->string('tech_whatsapp');
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
        Schema::dropIfExists('tech_info');
    }
}
