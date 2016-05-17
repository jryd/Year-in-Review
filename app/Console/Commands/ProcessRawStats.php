<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\RawStats;
use App\ProcessedStats;

class ProcessRawStats extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'stats:process';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Processes the raw stats in to meaningful information.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //Grab all the raw stats records
        $all_raw_stats = RawStats::all();

        //Loop through them all and generate the processed stats
        foreach ($all_raw_stats as $raw_stats)
        {
            //Total emails
            $total_emails = $raw_stats->emails_july + $raw_stats->emails_august + $raw_stats->emails_september + $raw_stats->emails_october + $raw_stats->emails_november + $raw_stats->emails_december + $raw_stats->emails_january + $raw_stats->emails_february + $raw_stats->emails_march + $raw_stats->emails_april + $raw_stats->emails_may + $raw_stats->emails_june;

            //Total calls inbound
            $total_calls_inbound = $raw_stats->calls_inbound_july + $raw_stats->calls_inbound_august + $raw_stats->calls_inbound_september + $raw_stats->calls_inbound_october + $raw_stats->calls_inbound_november + $raw_stats->calls_inbound_december + $raw_stats->calls_inbound_january + $raw_stats->calls_inbound_february + $raw_stats->calls_inbound_march + $raw_stats->calls_inbound_april + $raw_stats->calls_inbound_may + $raw_stats->calls_inbound_june;

            //Total calls outbound
            $total_calls_outbound = $raw_stats->calls_outbound_july + $raw_stats->calls_outbound_august + $raw_stats->calls_outbound_september + $raw_stats->calls_outbound_october + $raw_stats->calls_outbound_november + $raw_stats->calls_outbound_december + $raw_stats->calls_outbound_january + $raw_stats->calls_outbound_february + $raw_stats->calls_outbound_march + $raw_stats->calls_outbound_april + $raw_stats->calls_outbound_may + $raw_stats->calls_outbound_june;
            
            //Total calls
            $total_calls = $raw_stats->calls_inbound_july + $raw_stats->calls_inbound_august + $raw_stats->calls_inbound_september + $raw_stats->calls_inbound_october + $raw_stats->calls_inbound_november + $raw_stats->calls_inbound_december + $raw_stats->calls_inbound_january + $raw_stats->calls_inbound_february + $raw_stats->calls_inbound_march + $raw_stats->calls_inbound_april + $raw_stats->calls_inbound_may + $raw_stats->calls_inbound_june + $raw_stats->calls_outbound_july + $raw_stats->calls_outbound_august + $raw_stats->calls_outbound_september + $raw_stats->calls_outbound_october + $raw_stats->calls_outbound_november + $raw_stats->calls_outbound_december + $raw_stats->calls_outbound_january + $raw_stats->calls_outbound_february + $raw_stats->calls_outbound_march + $raw_stats->calls_outbound_april + $raw_stats->calls_outbound_may + $raw_stats->calls_outbound_june;

            //Month they sent the most emails

            //Quarter they sent the most emails

            //Month they took the most calls

            //Quarter they took the most calls

            //Insert all of this in to the processed stats table
            $processed_stats = new ProcessedStats;
            $processed_stats->emails = $total_emails;
            $processed_stats->calls_inbound = $total_calls_inbound;
            $processed_stats->calls_outbound = $total_calls_outbound;
            $processed_stats->calls_total = $total_calls
            $processed_stats->best_email_month = //;
            $processed_stats->best_email_quarter = //;
            $processed_stats->best_call_month = //;
            $processed_stats->best_call_quarter = //;
            $processed_stats->save();
        }

        $this->info('It works!');
    }
}
