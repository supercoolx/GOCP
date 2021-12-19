<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCallingPlaneCostingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calling_plane_costing', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('calling_phone_id');
            $table->foreign('calling_phone_id')->references('id')->on('calling_phone')->onDelete('cascade')->onUpdate('cascade');
            $table->string('calling_plan_cost');
            $table->string('usa_currency');
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
        Schema::dropIfExists('calling_plane_costing');
    }
}
