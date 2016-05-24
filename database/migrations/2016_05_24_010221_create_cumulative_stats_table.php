<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCumulativeStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cumulative_stats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('emails');
            $table->integer('calls');
            $table->integer('development');
            $table->integer('extra_tasks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cumulative_stats');
    }
}
