<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQualifierResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualifier_results', function (Blueprint $table) {
            $table->id();
            $table->decimal('accuracy', 6, 3);
            $table->integer('entry_player_id')->unsigned();
            $table->integer('qualifier_map_id')->unsigned();
            $table->timestamps();

            $table->foreign('entry_player_id')
            ->references('id')->on('entry_players')
            ->onDelete('cascade');

            $table->foreign('qualifier_map_id')
            ->references('id')->on('qualifier_maps')
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
        Schema::dropIfExists('qualifier_results');
    }
}
