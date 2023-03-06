<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('game_pk')->unsigned()->unique();
            $table->integer('home_team_id')->unsigned();
            $table->integer('away_team_id')->unsigned();
            $table->date('date');
            $table->integer('game_state_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('home_team_id')->references('api_id')->on('teams')->onDelete('cascade');
            $table->foreign('away_team_id')->references('api_id')->on('teams')->onDelete('cascade');
            $table->foreign('game_state_id')->references('id')->on('game_states')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
