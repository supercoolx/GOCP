<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Line extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('line', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('line_number');
            $table->string('imei');
            $table->unsignedBigInteger('cp_info_id');
            $table->foreign('cp_info_id')->references('id')->on('cp_info')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('line_info_id');
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
         Schema::dropIfExists('line');
    }
}
