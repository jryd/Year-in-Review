<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcessedStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processed_stats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('emails');
            $table->integer('calls_inbound');
            $table->integer('calls_outbound');
            $table->integer('calls_total');
            $table->string('best_email_month');
            $table->string('best_email_quarter');
            $table->string('best_call_month');
            $table->string('best_call_quarter');
            $table->timestamps();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('processed_stats');
    }
}
