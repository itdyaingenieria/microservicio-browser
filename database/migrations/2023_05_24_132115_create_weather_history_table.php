<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeatherHistoryTable extends Migration
{
    public function up()
    {
        Schema::create('weather_history', function (Blueprint $table) {
            $table->id();
            $table->string('city');
            $table->integer('humidity');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('weather_history');
    }
}
