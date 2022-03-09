<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQualifierMapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualifier_maps', function (Blueprint $table) {
            $table->id();
            $table->integer('map_id');
            $table->string('category');
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
        Schema::dropIfExists('qualifier_maps');
    }
}
