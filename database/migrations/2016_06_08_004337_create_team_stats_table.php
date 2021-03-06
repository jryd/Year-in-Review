<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_stats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id');
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
            $table->integer('calls_total_july');
            $table->integer('calls_total_august');
            $table->integer('calls_total_september');
            $table->integer('calls_total_october');
            $table->integer('calls_total_november');
            $table->integer('calls_total_december');
            $table->integer('calls_total_january');
            $table->integer('calls_total_february');
            $table->integer('calls_total_march');
            $table->integer('calls_total_april');
            $table->integer('calls_total_may');
            $table->integer('calls_total_june');
            $table->decimal('output_july', 11, 2);
            $table->decimal('output_august', 11, 2);
            $table->decimal('output_september', 11, 2);
            $table->decimal('output_october', 11, 2);
            $table->decimal('output_november', 11, 2);
            $table->decimal('output_december', 11, 2);
            $table->decimal('output_january', 11, 2);
            $table->decimal('output_february', 11, 2);
            $table->decimal('output_march', 11, 2);
            $table->decimal('output_april', 11, 2);
            $table->decimal('output_may', 11, 2);
            $table->decimal('output_june', 11, 2);
            $table->decimal('quality_july', 11, 2);
            $table->decimal('quality_august', 11, 2);
            $table->decimal('quality_september', 11, 2);
            $table->decimal('quality_october', 11, 2);
            $table->decimal('quality_november', 11, 2);
            $table->decimal('quality_december', 11, 2);
            $table->decimal('quality_january', 11, 2);
            $table->decimal('quality_february', 11, 2);
            $table->decimal('quality_march', 11, 2);
            $table->decimal('quality_april', 11, 2);
            $table->decimal('quality_may', 11, 2);
            $table->decimal('quality_june', 11, 2);
            $table->integer('emails');
            $table->integer('calls_inbound');
            $table->integer('calls_outbound');
            $table->integer('calls_total');
            $table->string('best_email_month');
            $table->string('best_email_quarter');
            $table->string('best_call_month');
            $table->string('best_call_quarter');
            $table->string('best_output_month');
            $table->string('best_output_quarter');
            $table->string('best_quality_month');
            $table->string('best_quality_quarter');
            $table->decimal('development', 11, 2);
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
        Schema::drop('team_stats');
    }
}
