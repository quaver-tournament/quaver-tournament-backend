<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignEntryQualifierColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('entry_qualifiers', function($table) {
            $table->foreign('entry_id')
            ->references('id')->on('entries')
            ->onDelete('cascade');

            $table->foreign('qualifier_lobby_id')
            ->references('id')->on('qualifier_lobbies')
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
