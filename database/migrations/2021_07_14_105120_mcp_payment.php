<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class McpPayment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mcp_payment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('mcp_id');
            $table->foreign('mcp_id')->references('id')->on('mcp')->onDelete('cascade')->onUpdate('cascade');
            $table->string('time_range');
            $table->string('whatsapp_mints');
            $table->string('gsm_mints');
            $table->string('create_payment');
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
        //
    }
}
