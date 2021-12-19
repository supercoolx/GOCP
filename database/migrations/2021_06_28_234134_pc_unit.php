<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PcUnit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pc_unit', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('time_up');
            $table->unsignedBigInteger('cp_info_id');
            $table->foreign('cp_info_id')->references('id')->on('cp_info')->onDelete('cascade')->onUpdate('cascade');
            
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
        Schema::dropIfExists('pc_unit');
    }
}
