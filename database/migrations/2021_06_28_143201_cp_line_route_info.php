<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CpLineRouteInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cp_line_route_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('calling_plane_costing_id');
            $table->foreign('calling_plane_costing_id')->references('id')->on('calling_plane_costing')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('cellular_companies_id');
            $table->foreign('cellular_companies_id')->references('id')->on('cellular_companies')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('line_id');
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
         Schema::dropIfExists('cp_line_route_info');
    }
}
