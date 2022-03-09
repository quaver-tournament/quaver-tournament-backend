<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTournamentRoundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournament_rounds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('tournament_id')->unsigned();
            $table->timestamps();

            $table->foreign('tournament_id')
            ->references('id')->on('tournaments')
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
        Schema::dropIfExists('tournament_rounds');
    }
}
