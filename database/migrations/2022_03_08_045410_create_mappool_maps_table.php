<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMappoolMapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mappool_maps', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->integer('map_id');
            $table->integer('mod_id')->unsigned();
            $table->timestamps();

            $table->foreign('mod_id')
            ->references('id')->on('mods')
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
        Schema::dropIfExists('mappool_maps');
    }
}
