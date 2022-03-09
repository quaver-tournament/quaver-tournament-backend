<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->id();
            $table->integer('team_id')->unsigned();
            $table->integer('tournament_id')->unsigned();
            $table->integer('seed');
            $table->timestamps();

            $table->foreign('team_id')
            ->references('id')->on('teams')
            ->onDelete('cascade');

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
        Schema::dropIfExists('entries');
    }
}
