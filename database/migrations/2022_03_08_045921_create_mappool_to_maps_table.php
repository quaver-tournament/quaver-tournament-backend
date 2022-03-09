<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMappoolToMapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mappool_to_maps', function (Blueprint $table) {
            $table->id();
            $table->integer('mappool_map_id')->unsigned();
            $table->integer('mappool_id');
            $table->timestamps();

            $table->foreign('mappool_map_id')
            ->references('id')->on('mappool_maps')
            ->onDelete('cascade');

            $table->foreign('mappool_id')
            ->references('id')->on('mappools')
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
        Schema::dropIfExists('mappool_to_maps');
    }
}
