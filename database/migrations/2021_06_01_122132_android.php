<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Android extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('traffic', function (Blueprint $table) {
            $table->bigIncrements('id');
           
            $table->string('route_id');
            $table->string('route_sale_price_id');
            $table->string('call_attempts_per_hour');
            
            $table->string('call_attempts_complete');
            $table->string('average_call_duration');
            $table->string('range_time');
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
           Schema::dropIfExists('traffic');
    }
}
