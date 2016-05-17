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
            //Storing all the values in variable for easier use
            $emails_july = $raw_stats->emails_july;
            $emails_august = $raw_stats->emails_august;
            $emails_september = $raw_stats->emails_september;
            $emails_october = $raw_stats->emails_october;
            $emails_november = $raw_stats->emails_november;
            $emails_december = $raw_stats->emails_december;
            $emails_january = $raw_stats->emails_january;
            $emails_february = $raw_stats->emails_february;
            $emails_march = $raw_stats->emails_march;
            $emails_april = $raw_stats->emails_april;
            $emails_may = $raw_stats->emails_may;
            $emails_june = $raw_stats->emails_june;
            $calls_inbound_july = $raw_stats->calls_inbound_july;
            $calls_inbound_august = $raw_stats->calls_inbound_august;
            $calls_inbound_september = $raw_stats->calls_inbound_september;
            $calls_inbound_october = $raw_stats->calls_inbound_october;
            $calls_inbound_november = $raw_stats->calls_inbound_november;
            $calls_inbound_december = $raw_stats->calls_inbound_december;
            $calls_inbound_january = $raw_stats->calls_inbound_january;
            $calls_inbound_february = $raw_stats->calls_inbound_february;
            $calls_inbound_march = $raw_stats->calls_inbound_march;
            $calls_inbound_april = $raw_stats->calls_inbound_april;
            $calls_inbound_may = $raw_stats->calls_inbound_may;
            $calls_inbound_june = $raw_stats->calls_inbound_june;
            $calls_outbound_july = $raw_stats->calls_outbound_july;
            $calls_outbound_august = $raw_stats->calls_outbound_august;
            $calls_outbound_september = $raw_stats->calls_outbound_september;
            $calls_outbound_october = $raw_stats->calls_outbound_october;
            $calls_outbound_november = $raw_stats->calls_outbound_november;
            $calls_outbound_december = $raw_stats->calls_outbound_december;
            $calls_outbound_january = $raw_stats->calls_outbound_january;
            $calls_outbound_february = $raw_stats->calls_outbound_february;
            $calls_outbound_march = $raw_stats->calls_outbound_march;
            $calls_outbound_april = $raw_stats->calls_outbound_april;
            $calls_outbound_may = $raw_stats->calls_outbound_may;
            $calls_outbound_june = $raw_stats->calls_outbound_june;
			$calls_january_total = $calls_inbound_january + $calls_outbound_january;
			$calls_february_total = $calls_inbound_february + $calls_outbound_february;
			$calls_march_total = $calls_inbound_march + $calls_outbound_march;
			$calls_april_total = $calls_inbound_april + $calls_outbound_april;
			$calls_may_total = $calls_inbound_may + $calls_outbound_may;
			$calls_june_total = $calls_inbound_june + $calls_outbound_june;
			$calls_july_total = $calls_inbound_july + $calls_outbound_july;
			$calls_august_total = $calls_inbound_august + $calls_outbound_august;
			$calls_september_total = $calls_inbound_september + $calls_outbound_september;
			$calls_october_total = $calls_inbound_october + $calls_outbound_october;
			$calls_november_total = $calls_inbound_november + $calls_outbound_november;
			$calls_december_total = $calls_inbound_december + $calls_outbound_december;
            
            //Total emails
            $total_emails = $emails_july + $emails_august + $emails_september + $emails_october + $emails_november + $emails_december + $emails_january + $emails_february + $emails_march + $emails_april + $emails_may + $emails_june;

            //Total calls inbound
            $total_calls_inbound = $calls_inbound_july + $calls_inbound_august + $calls_inbound_september + $calls_inbound_october + $calls_inbound_november + $calls_inbound_december + $calls_inbound_january + $calls_inbound_february + $calls_inbound_march + $calls_inbound_april + $calls_inbound_may + $calls_inbound_june;

            //Total calls outbound
            $total_calls_outbound = $calls_outbound_july + $calls_outbound_august + $calls_outbound_september + $calls_outbound_october + $calls_outbound_november + $calls_outbound_december + $calls_outbound_january + $calls_outbound_february + $calls_outbound_march + $calls_outbound_april + $calls_outbound_may + $calls_outbound_june;
            
            //Total calls
            $total_calls = $total_calls_inbound + $total_calls_outbound;

            //Month they sent the most emails
			$best_email_month_array = array('January' => $emails_january, 'February' => $emails_february, 'March' => $emails_march, 'April' => $emails_april, 'May' => $emails_may, 'June' => $emails_june, 'July' => $emails_july, 'August' => $emails_august, 'September' => $emails_september, 'October' => $emails_october, 'November' => $emails_november, 'December' => $emails_december);
			arsort($best_email_month_array);
			$best_email_month = key($best_email_month_array);
			
            //Quarter they sent the most emails
			$email_q1 = $emails_july + $emails_august + $emails_september;
			$email_q2 = $emails_october + $emails_november + $emails_december;
			$email_q3 = $emails_january + $emails_february + $emails_march;
			$email_q4 = $emails_april + $emails_may + $emails_june;
			
			$best_email_quarter_array = array('Quarter 1' => $email_q1, 'Quarter 2' => $email_q2, 'Quarter 3' => $email_q3, 'Quarter 4' => $email_q4);
			arsort($best_email_quarter_array);
			$best_email_quarter = key($best_email_quarter_array);

            //Month they took the most calls
			$best_call_month_array = array('January' => $calls_january_total, 'February' => $calls_february_total, 'March' => $calls_march_total, 'April' => $calls_april_total, 'May' => $calls_may_total, 'June' => $calls_june_total, 'July' => $calls_july_total, 'August' => $calls_august_total, 'September' => $calls_september_total, 'October' => $calls_october_total, 'November' => $calls_november_total, 'December' => $calls_december_total);
			arsort($best_call_month_array);
			$best_call_month = key($best_call_month_array);
			
            //Quarter they took the most calls
			$calls_q1 = $calls_july_total + $calls_august_total + $calls_september_total;
			$calls_q2 = $calls_october_total + $calls_november_total + $calls_december_total;
			$calls_q3 = $calls_january_total + $calls_february_total + $calls_march_total;
			$calls_q4 = $calls_april_total + $calls_may_total + $calls_june_total;
			
			$best_call_quarter_array = array('Quarter 1' => $calls_q1, 'Quarter 2' => $calls_q2, 'Quarter 3' => $calls_q3, 'Quarter 4' => $calls_q4);
			arsort($best_call_quarter_array);
			$best_call_quarter = key($best_call_quarter_array);

            //Insert all of this in to the processed stats table
            $processed_stats = new ProcessedStats;
            $processed_stats->emails = $total_emails;
            $processed_stats->calls_inbound = $total_calls_inbound;
            $processed_stats->calls_outbound = $total_calls_outbound;
            $processed_stats->calls_total = $total_calls
            $processed_stats->best_email_month = $best_email_month;
            $processed_stats->best_email_quarter = $best_email_quarter;
            $processed_stats->best_call_month = $best_call_month;
            $processed_stats->best_call_quarter = $best_call_quarter;
            $processed_stats->save();
        }

        $this->info('It works!');
    }
}