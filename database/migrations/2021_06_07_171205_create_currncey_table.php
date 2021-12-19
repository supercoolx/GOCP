<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrnceyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currncey', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('currncey_name');
            $table->unsignedBigInteger('countries_id');
            $table->foreign('countries_id')->references('id')->on('countries')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('currncey');
    }
}
