<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->timestamp('time_utc');
            $table->integer('tournament_round_id')->unsigned();
            $table->integer('referee_id')->unsigned();
            $table->integer('match_id')->unsigned();
            $table->integer('streamer_id')->unsigned();
            $table->integer('commentator1_id')->unsigned();
            $table->integer('commentator2_id')->unsigned();
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
        Schema::dropIfExists('schedules');
    }
}
