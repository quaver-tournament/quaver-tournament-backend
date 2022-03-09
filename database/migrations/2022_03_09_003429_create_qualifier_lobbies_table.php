<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQualifierLobbiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualifier_lobbies', function (Blueprint $table) {
            $table->id();
            $table->timestamp('time_utc');
            $table->integer('referee_id')->unsigned();
            $table->timestamps();

            $table->foreign('referee_id')
            ->references('id')->on('user_tournament_staff')
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
        Schema::dropIfExists('qualifier_lobbies');
    }
}
