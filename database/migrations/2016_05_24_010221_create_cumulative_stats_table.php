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
            $table->decimal('development', 11, 2);
            $table->integer('extra_tasks');
            $table->decimal('cs_email_average', 11, 2);
            $table->integer('email_per_person_average');
            $table->integer('call_per_person_average');
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
