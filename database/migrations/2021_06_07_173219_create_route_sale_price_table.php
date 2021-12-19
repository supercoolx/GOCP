<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRouteSalePriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('route_sale_price', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('create_route_id');
            $table->foreign('create_route_id')->references('id')->on('create_route')->onDelete('cascade')->onUpdate('cascade');
            ;
            $table->string('sale_price');
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
        Schema::dropIfExists('route_sale_price');
    }
}
