<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreateRouteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_route', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('route_name');
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
        Schema::dropIfExists('create_route');
    }
}
