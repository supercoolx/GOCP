<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCallingPhoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calling_phone', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('calling_plan_name');
            $table->unsignedBigInteger('cellular_companies_id');
            $table->foreign('cellular_companies_id')->references('id')->on('cellular_companies')->onDelete('cascade')->onUpdate('cascade');
            
            $table->string('call_plan_detail');
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
        Schema::dropIfExists('calling_phone');
    }
}
