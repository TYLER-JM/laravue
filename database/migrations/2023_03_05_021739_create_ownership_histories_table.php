<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnershipHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ownership_histories', function (Blueprint $table) {
            $table->id();
            $table->integer('owner_id')->unsigned();
            $table->integer('team_id')->unsigned();
            $table->integer('accumulated_points')->nullable()->default(null);
            $table->dateTime('start_date');
            $table->dateTime('end_date')->nullable()->default(null);
            $table->timestamps();

            $table->foreign('owner_id')->references('id')->on('owners');
            $table->foreign('team_id')->references('api_id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ownership_histories');
    }
}
