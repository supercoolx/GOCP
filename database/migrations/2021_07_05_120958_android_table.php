<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AndriodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('android', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sim_no');
            $table->string('phone_number');
            $table->string('imei');
            $table->unsignedBigInteger('calling_plane_costing_id');
            $table->foreign('calling_plane_costing_id')->references('id')->on('calling_plane_costing')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('cellular_companies_id');
            $table->foreign('cellular_companies_id')->references('id')->on('cellular_companies')->onDelete('cascade')->onUpdate('cascade');
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
         Schema::dropIfExists('android');
    }
}
