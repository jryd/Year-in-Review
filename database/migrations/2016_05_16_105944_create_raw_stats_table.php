<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRawStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raw_stats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('emails_july');
            $table->integer('emails_august');
            $table->integer('emails_september');
            $table->integer('emails_october');
            $table->integer('emails_november');
            $table->integer('emails_december');
            $table->integer('emails_january');
            $table->integer('emails_february');
            $table->integer('emails_march');
            $table->integer('emails_april');
            $table->integer('emails_may');
            $table->integer('emails_june');
            $table->integer('calls_inbound_july');
            $table->integer('calls_inbound_august');
            $table->integer('calls_inbound_september');
            $table->integer('calls_inbound_october');
            $table->integer('calls_inbound_november');
            $table->integer('calls_inbound_december');
            $table->integer('calls_inbound_january');
            $table->integer('calls_inbound_february');
            $table->integer('calls_inbound_march');
            $table->integer('calls_inbound_april');
            $table->integer('calls_inbound_may');
            $table->integer('calls_inbound_june');
            $table->integer('calls_outbound_july');
            $table->integer('calls_outbound_august');
            $table->integer('calls_outbound_september');
            $table->integer('calls_outbound_october');
            $table->integer('calls_outbound_november');
            $table->integer('calls_outbound_december');
            $table->integer('calls_outbound_january');
            $table->integer('calls_outbound_february');
            $table->integer('calls_outbound_march');
            $table->integer('calls_outbound_april');
            $table->integer('calls_outbound_may');
            $table->integer('calls_outbound_june');
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
        Schema::drop('raw_stats');
    }
}
