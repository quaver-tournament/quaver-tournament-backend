<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->integer('side_red')->unsigned();
            $table->integer('side_blue')->unsigned();
            $table->integer('red_points');
            $table->integer('blue_points');
            $table->integer('tournament_round_id')->unsigned();
            $table->timestamps();

            $table->foreign('tournament_round_id')
            ->references('id')->on('tournament_rounds')
            ->onDelete('cascade');

            $table->foreign('side_red')
            ->references('id')->on('entries')
            ->onDelete('cascade');

            $table->foreign('side_blue')
            ->references('id')->on('entries')
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
        Schema::dropIfExists('matches');
    }
}
