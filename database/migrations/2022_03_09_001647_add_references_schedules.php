<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReferencesSchedules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('schedules', function($table) {
            $table->foreign('tournament_round_id')
            ->references('id')->on('tournament_rounds')
            ->onDelete('cascade');

            $table->foreign('referee_id')
            ->references('id')->on('user_tournament_staff')
            ->onDelete('cascade');

            $table->foreign('streamer_id')
            ->references('id')->on('user_tournament_staff')
            ->onDelete('cascade');

            $table->foreign('commentator1_id')
            ->references('id')->on('user_tournament_staff')
            ->onDelete('cascade');

            $table->foreign('commentator2_id')
            ->references('id')->on('user_tournament_staff')
            ->onDelete('cascade');

            $table->foreign('match_id')
            ->references('id')->on('matches')
            ->onDelete('cascade');

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
