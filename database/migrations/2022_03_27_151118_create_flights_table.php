<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('flight_number');
            $table->string('airline');
            $table->string('origin');
            $table->string('destination');
            $table->float('price');
            $table->date('boarding_time');
            $table->date('arrival_time');
            $table->time('boarding_hour');
            $table->time('arrival_hour');
            $table->string('reservation_code')->nullable();
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
        Schema::dropIfExists('flights');
    }
}
