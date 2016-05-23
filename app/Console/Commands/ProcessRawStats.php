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
        $bar = $this->output->createProgressBar(count($all_raw_stats));

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
			$output_july = $raw_stats->output_july;
            $output_august = $raw_stats->output_august;
            $output_september = $raw_stats->output_september;
            $output_october = $raw_stats->output_october;
            $output_november = $raw_stats->output_november;
            $output_december = $raw_stats->output_december;
            $output_january = $raw_stats->output_january;
            $output_february = $raw_stats->output_february;
            $output_march = $raw_stats->output_march;
            $output_april = $raw_stats->output_april;
            $output_may = $raw_stats->output_may;
            $output_june = $raw_stats->output_june;
            $quality_july = $raw_stats->quality_july;
            $quality_august = $raw_stats->quality_august;
            $quality_september = $raw_stats->quality_september;
            $quality_october = $raw_stats->quality_october;
            $quality_november = $raw_stats->quality_november;
            $quality_december = $raw_stats->quality_december;
            $quality_january = $raw_stats->quality_january;
            $quality_february = $raw_stats->quality_february;
            $quality_march = $raw_stats->quality_march;
            $quality_april = $raw_stats->quality_april;
            $quality_may = $raw_stats->quality_may;
            $quality_june = $raw_stats->quality_june;
            
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
			
			//Month they had the highest output
			$best_output_month_array = array('January' => $output_january, 'February' => $output_february, 'March' => $output_march, 'April' => $output_april, 'May' => $output_may, 'June' => $output_june, 'July' => $output_july, 'August' => $output_august, 'September' => $output_september, 'October' => $output_october, 'November' => $output_november, 'December' => $output_december);
			arsort($best_output_month_array);
			$best_output_month = key($best_output_month_array);
			
			//Quarter they had the highest output
			$output_q1 = $output_july + $output_august + $output_september;
            $output_q2 = $output_october + $output_november + $output_december;
            $output_q3 = $output_january + $output_february + $output_march;
            $output_q4 = $output_april + $output_may + $output_june;
            
            $best_output_quarter_array = array('Quarter 1' => $output_q1, 'Quarter 2' => $output_q2, 'Quarter 3' => $output_q3, 'Quarter 4' => $output_q4);
            arsort($best_output_quarter_array);
            $best_output_quarter = key($best_output_quarter_array);
            
			//Month they had the highest quality
			$best_quality_month_array = array('January' => $quality_january, 'February' => $quality_february, 'March' => $quality_march, 'April' => $quality_april, 'May' => $quality_may, 'June' => $quality_june, 'July' => $quality_july, 'August' => $quality_august, 'September' => $quality_september, 'October' => $quality_october, 'November' => $quality_november, 'December' => $quality_december);
			arsort($best_quality_month_array);
			$best_quality_month = key($best_quality_month_array);
			
			//Quarter they had the highest quality
            $quality_q1 = $quality_july + $quality_august + $quality_september;
            $quality_q2 = $quality_october + $quality_november + $quality_december;
            $quality_q3 = $quality_january + $quality_february + $quality_march;
            $quality_q4 = $quality_april + $quality_may + $quality_june;
            
            $best_quality_quarter_array = array('Quarter 1' => $quality_q1, 'Quarter 2' => $quality_q2, 'Quarter 3' => $quality_q3, 'Quarter 4' => $quality_q4);
            arsort($best_quality_quarter_array);
            $best_quality_quarter = key($best_quality_quarter_array);
            
            //Insert all of this in to the processed stats table
            $processed_stats = new ProcessedStats;
            $processed_stats->emails = $total_emails;
            $processed_stats->calls_inbound = $total_calls_inbound;
            $processed_stats->calls_outbound = $total_calls_outbound;
            $processed_stats->calls_total = $total_calls;
            $processed_stats->best_email_month = $best_email_month;
            $processed_stats->best_email_quarter = $best_email_quarter;
            $processed_stats->best_call_month = $best_call_month;
            $processed_stats->best_call_quarter = $best_call_quarter;
            $processed_stats->best_output_month = $best_output_month;
            $processed_stats->best_output_quarter = $best_output_quarter;
            $processed_stats->best_quality_month = $best_quality_month;
            $processed_stats->best_quality_quarter = $best_quality_quarter;
            $processed_stats->save();
            
            //Advance the progress bar
            $bar->advance();
        }
        
        $bar->finish();
        $this->info('Completed!');
    }
}