<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\RawStats;
use App\ProcessedStats;

class ProcessTeamStats extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'team:process';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Process everyones raw stats together to generate their team stats';

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
        $bar = $this->output->createProgressBar(4);
        //Define global variables
        $emails_july = null;
        $emails_august = null;
        $emails_september = null;
        $emails_october = null;
        $emails_november = null;
        $emails_december = null;
        $emails_january = null;
        $emails_february = null;
        $emails_march = null;
        $emails_april = null;
        $emails_may = null;
        $emails_june = null;
        $calls_inbound_july = null;
        $calls_inbound_august = null;
        $calls_inbound_september = null;
        $calls_inbound_october = null;
        $calls_inbound_november = null;
        $calls_inbound_december = null;
        $calls_inbound_january = null;
        $calls_inbound_february = null;
        $calls_inbound_march = null;
        $calls_inbound_april = null;
        $calls_inbound_may = null;
        $calls_inbound_june = null;
        $calls_outbound_july = null;
        $calls_outbound_august = null;
        $calls_outbound_september = null;
        $calls_outbound_october = null;
        $calls_outbound_november = null;
        $calls_outbound_december = null;
        $calls_outbound_january = null;
        $calls_outbound_february = null;
        $calls_outbound_march = null;
        $calls_outbound_april = null;
        $calls_outbound_may = null;
        $calls_outbound_june = null;
        $calls_january_total = null;
        $calls_february_total = null;
        $calls_march_total = null;
        $calls_april_total = null;
        $calls_may_total = null;
        $calls_june_total = null;
        $calls_july_total = null;
        $calls_august_total = null;
        $calls_september_total = null;
        $calls_october_total = null;
        $calls_november_total = null;
        $calls_december_total = null;
        $output_july = null;
        $output_august = null;
        $output_september = null;
        $output_october = null;
        $output_november = null;
        $output_december = null;
        $output_january = null;
        $output_february = null;
        $output_march = null;
        $output_april = null;
        $output_may = null;
        $output_june = null;
        $quality_july = null;
        $quality_august = null;
        $quality_september = null;
        $quality_october = null;
        $quality_november = null;
        $quality_december = null;
        $quality_january = null;
        $quality_february = null;
        $quality_march = null;
        $quality_april = null;
        $quality_may = null;
        $quality_june = null;

        //Day Crew
        $daycrewrawstats = RawStats::where('role_id', '=', 1)->get();
        foreach ($daycrewrawstats as $rawstats)
        {
            $emails_july += $raw_stats->emails_july;
            $emails_august += $raw_stats->emails_august;
            $emails_september += $raw_stats->emails_september;
            $emails_october += $raw_stats->emails_october;
            $emails_november += $raw_stats->emails_november;
            $emails_december += $raw_stats->emails_december;
            $emails_january += $raw_stats->emails_january;
            $emails_february += $raw_stats->emails_february;
            $emails_march += $raw_stats->emails_march;
            $emails_april += $raw_stats->emails_april;
            $emails_may += $raw_stats->emails_may;
            $emails_june += $raw_stats->emails_june;
            $calls_inbound_july += $raw_stats->calls_inbound_july;
            $calls_inbound_august += $raw_stats->calls_inbound_august;
            $calls_inbound_september += $raw_stats->calls_inbound_september;
            $calls_inbound_october += $raw_stats->calls_inbound_october;
            $calls_inbound_november += $raw_stats->calls_inbound_november;
            $calls_inbound_december += $raw_stats->calls_inbound_december;
            $calls_inbound_january += $raw_stats->calls_inbound_january;
            $calls_inbound_february += $raw_stats->calls_inbound_february;
            $calls_inbound_march += $raw_stats->calls_inbound_march;
            $calls_inbound_april += $raw_stats->calls_inbound_april;
            $calls_inbound_may += $raw_stats->calls_inbound_may;
            $calls_inbound_june += $raw_stats->calls_inbound_june;
            $calls_outbound_july += $raw_stats->calls_outbound_july;
            $calls_outbound_august += $raw_stats->calls_outbound_august;
            $calls_outbound_september += $raw_stats->calls_outbound_september;
            $calls_outbound_october += $raw_stats->calls_outbound_october;
            $calls_outbound_november += $raw_stats->calls_outbound_november;
            $calls_outbound_december += $raw_stats->calls_outbound_december;
            $calls_outbound_january += $raw_stats->calls_outbound_january;
            $calls_outbound_february += $raw_stats->calls_outbound_february;
            $calls_outbound_march += $raw_stats->calls_outbound_march;
            $calls_outbound_april += $raw_stats->calls_outbound_april;
            $calls_outbound_may += $raw_stats->calls_outbound_may;
            $calls_outbound_june += $raw_stats->calls_outbound_june;
            $calls_january_total += $calls_inbound_january + $calls_outbound_january;
            $calls_february_total += $calls_inbound_february + $calls_outbound_february;
            $calls_march_total += $calls_inbound_march + $calls_outbound_march;
            $calls_april_total += $calls_inbound_april + $calls_outbound_april;
            $calls_may_total += $calls_inbound_may + $calls_outbound_may;
            $calls_june_total += $calls_inbound_june + $calls_outbound_june;
            $calls_july_total += $calls_inbound_july + $calls_outbound_july;
            $calls_august_total += $calls_inbound_august + $calls_outbound_august;
            $calls_september_total += $calls_inbound_september + $calls_outbound_september;
            $calls_october_total += $calls_inbound_october + $calls_outbound_october;
            $calls_november_total += $calls_inbound_november + $calls_outbound_november;
            $calls_december_total += $calls_inbound_december + $calls_outbound_december;
            $output_july += $raw_stats->output_july;
            $output_august += $raw_stats->output_august;
            $output_september += $raw_stats->output_september;
            $output_october += $raw_stats->output_october;
            $output_november += $raw_stats->output_november;
            $output_december += $raw_stats->output_december;
            $output_january += $raw_stats->output_january;
            $output_february += $raw_stats->output_february;
            $output_march += $raw_stats->output_march;
            $output_april += $raw_stats->output_april;
            $output_may += $raw_stats->output_may;
            $output_june += $raw_stats->output_june;
            $quality_july += $raw_stats->quality_july;
            $quality_august += $raw_stats->quality_august;
            $quality_september += $raw_stats->quality_september;
            $quality_october += $raw_stats->quality_october;
            $quality_november += $raw_stats->quality_november;
            $quality_december += $raw_stats->quality_december;
            $quality_january += $raw_stats->quality_january;
            $quality_february += $raw_stats->quality_february;
            $quality_march += $raw_stats->quality_march;
            $quality_april += $raw_stats->quality_april;
            $quality_may += $raw_stats->quality_may;
            $quality_june += $raw_stats->quality_june;
        }
        $daycrewteamstats = new TeamStats;
        //save all entries
        $daycrewteamstats->save();
        $bar->advance();

        //Reset stats
        $emails_july = null;
        $emails_august = null;
        $emails_september = null;
        $emails_october = null;
        $emails_november = null;
        $emails_december = null;
        $emails_january = null;
        $emails_february = null;
        $emails_march = null;
        $emails_april = null;
        $emails_may = null;
        $emails_june = null;
        $calls_inbound_july = null;
        $calls_inbound_august = null;
        $calls_inbound_september = null;
        $calls_inbound_october = null;
        $calls_inbound_november = null;
        $calls_inbound_december = null;
        $calls_inbound_january = null;
        $calls_inbound_february = null;
        $calls_inbound_march = null;
        $calls_inbound_april = null;
        $calls_inbound_may = null;
        $calls_inbound_june = null;
        $calls_outbound_july = null;
        $calls_outbound_august = null;
        $calls_outbound_september = null;
        $calls_outbound_october = null;
        $calls_outbound_november = null;
        $calls_outbound_december = null;
        $calls_outbound_january = null;
        $calls_outbound_february = null;
        $calls_outbound_march = null;
        $calls_outbound_april = null;
        $calls_outbound_may = null;
        $calls_outbound_june = null;
        $calls_january_total = null;
        $calls_february_total = null;
        $calls_march_total = null;
        $calls_april_total = null;
        $calls_may_total = null;
        $calls_june_total = null;
        $calls_july_total = null;
        $calls_august_total = null;
        $calls_september_total = null;
        $calls_october_total = null;
        $calls_november_total = null;
        $calls_december_total = null;
        $output_july = null;
        $output_august = null;
        $output_september = null;
        $output_october = null;
        $output_november = null;
        $output_december = null;
        $output_january = null;
        $output_february = null;
        $output_march = null;
        $output_april = null;
        $output_may = null;
        $output_june = null;
        $quality_july = null;
        $quality_august = null;
        $quality_september = null;
        $quality_october = null;
        $quality_november = null;
        $quality_december = null;
        $quality_january = null;
        $quality_february = null;
        $quality_march = null;
        $quality_april = null;
        $quality_may = null;
        $quality_june = null;

        //Evening Crew One
        $eveningcrewonerawstats = RawStats::where('role_id', '=', 2)->get();
        foreach ($eveningcrewonerawstats as $rawstats)
        {
            $emails_july += $raw_stats->emails_july;
            $emails_august += $raw_stats->emails_august;
            $emails_september += $raw_stats->emails_september;
            $emails_october += $raw_stats->emails_october;
            $emails_november += $raw_stats->emails_november;
            $emails_december += $raw_stats->emails_december;
            $emails_january += $raw_stats->emails_january;
            $emails_february += $raw_stats->emails_february;
            $emails_march += $raw_stats->emails_march;
            $emails_april += $raw_stats->emails_april;
            $emails_may += $raw_stats->emails_may;
            $emails_june += $raw_stats->emails_june;
            $calls_inbound_july += $raw_stats->calls_inbound_july;
            $calls_inbound_august += $raw_stats->calls_inbound_august;
            $calls_inbound_september += $raw_stats->calls_inbound_september;
            $calls_inbound_october += $raw_stats->calls_inbound_october;
            $calls_inbound_november += $raw_stats->calls_inbound_november;
            $calls_inbound_december += $raw_stats->calls_inbound_december;
            $calls_inbound_january += $raw_stats->calls_inbound_january;
            $calls_inbound_february += $raw_stats->calls_inbound_february;
            $calls_inbound_march += $raw_stats->calls_inbound_march;
            $calls_inbound_april += $raw_stats->calls_inbound_april;
            $calls_inbound_may += $raw_stats->calls_inbound_may;
            $calls_inbound_june += $raw_stats->calls_inbound_june;
            $calls_outbound_july += $raw_stats->calls_outbound_july;
            $calls_outbound_august += $raw_stats->calls_outbound_august;
            $calls_outbound_september += $raw_stats->calls_outbound_september;
            $calls_outbound_october += $raw_stats->calls_outbound_october;
            $calls_outbound_november += $raw_stats->calls_outbound_november;
            $calls_outbound_december += $raw_stats->calls_outbound_december;
            $calls_outbound_january += $raw_stats->calls_outbound_january;
            $calls_outbound_february += $raw_stats->calls_outbound_february;
            $calls_outbound_march += $raw_stats->calls_outbound_march;
            $calls_outbound_april += $raw_stats->calls_outbound_april;
            $calls_outbound_may += $raw_stats->calls_outbound_may;
            $calls_outbound_june += $raw_stats->calls_outbound_june;
            $calls_january_total += $calls_inbound_january + $calls_outbound_january;
            $calls_february_total += $calls_inbound_february + $calls_outbound_february;
            $calls_march_total += $calls_inbound_march + $calls_outbound_march;
            $calls_april_total += $calls_inbound_april + $calls_outbound_april;
            $calls_may_total += $calls_inbound_may + $calls_outbound_may;
            $calls_june_total += $calls_inbound_june + $calls_outbound_june;
            $calls_july_total += $calls_inbound_july + $calls_outbound_july;
            $calls_august_total += $calls_inbound_august + $calls_outbound_august;
            $calls_september_total += $calls_inbound_september + $calls_outbound_september;
            $calls_october_total += $calls_inbound_october + $calls_outbound_october;
            $calls_november_total += $calls_inbound_november + $calls_outbound_november;
            $calls_december_total += $calls_inbound_december + $calls_outbound_december;
            $output_july += $raw_stats->output_july;
            $output_august += $raw_stats->output_august;
            $output_september += $raw_stats->output_september;
            $output_october += $raw_stats->output_october;
            $output_november += $raw_stats->output_november;
            $output_december += $raw_stats->output_december;
            $output_january += $raw_stats->output_january;
            $output_february += $raw_stats->output_february;
            $output_march += $raw_stats->output_march;
            $output_april += $raw_stats->output_april;
            $output_may += $raw_stats->output_may;
            $output_june += $raw_stats->output_june;
            $quality_july += $raw_stats->quality_july;
            $quality_august += $raw_stats->quality_august;
            $quality_september += $raw_stats->quality_september;
            $quality_october += $raw_stats->quality_october;
            $quality_november += $raw_stats->quality_november;
            $quality_december += $raw_stats->quality_december;
            $quality_january += $raw_stats->quality_january;
            $quality_february += $raw_stats->quality_february;
            $quality_march += $raw_stats->quality_march;
            $quality_april += $raw_stats->quality_april;
            $quality_may += $raw_stats->quality_may;
            $quality_june += $raw_stats->quality_june;
        }
        $eveningcrewoneteamstats = new TeamStats;
        //save all entries
        $eveningcrewoneteamstats->save();
        $bar->advance();

        //Reset stats
        $emails_july = null;
        $emails_august = null;
        $emails_september = null;
        $emails_october = null;
        $emails_november = null;
        $emails_december = null;
        $emails_january = null;
        $emails_february = null;
        $emails_march = null;
        $emails_april = null;
        $emails_may = null;
        $emails_june = null;
        $calls_inbound_july = null;
        $calls_inbound_august = null;
        $calls_inbound_september = null;
        $calls_inbound_october = null;
        $calls_inbound_november = null;
        $calls_inbound_december = null;
        $calls_inbound_january = null;
        $calls_inbound_february = null;
        $calls_inbound_march = null;
        $calls_inbound_april = null;
        $calls_inbound_may = null;
        $calls_inbound_june = null;
        $calls_outbound_july = null;
        $calls_outbound_august = null;
        $calls_outbound_september = null;
        $calls_outbound_october = null;
        $calls_outbound_november = null;
        $calls_outbound_december = null;
        $calls_outbound_january = null;
        $calls_outbound_february = null;
        $calls_outbound_march = null;
        $calls_outbound_april = null;
        $calls_outbound_may = null;
        $calls_outbound_june = null;
        $calls_january_total = null;
        $calls_february_total = null;
        $calls_march_total = null;
        $calls_april_total = null;
        $calls_may_total = null;
        $calls_june_total = null;
        $calls_july_total = null;
        $calls_august_total = null;
        $calls_september_total = null;
        $calls_october_total = null;
        $calls_november_total = null;
        $calls_december_total = null;
        $output_july = null;
        $output_august = null;
        $output_september = null;
        $output_october = null;
        $output_november = null;
        $output_december = null;
        $output_january = null;
        $output_february = null;
        $output_march = null;
        $output_april = null;
        $output_may = null;
        $output_june = null;
        $quality_july = null;
        $quality_august = null;
        $quality_september = null;
        $quality_october = null;
        $quality_november = null;
        $quality_december = null;
        $quality_january = null;
        $quality_february = null;
        $quality_march = null;
        $quality_april = null;
        $quality_may = null;
        $quality_june = null;

        //Evening Crew Two
        $eveningcrewtworawstats = RawStats::where('role_id', '=', 3)->get();
        foreach ($eveningcrewtworawstats as $rawstats)
        {
            $emails_july += $raw_stats->emails_july;
            $emails_august += $raw_stats->emails_august;
            $emails_september += $raw_stats->emails_september;
            $emails_october += $raw_stats->emails_october;
            $emails_november += $raw_stats->emails_november;
            $emails_december += $raw_stats->emails_december;
            $emails_january += $raw_stats->emails_january;
            $emails_february += $raw_stats->emails_february;
            $emails_march += $raw_stats->emails_march;
            $emails_april += $raw_stats->emails_april;
            $emails_may += $raw_stats->emails_may;
            $emails_june += $raw_stats->emails_june;
            $calls_inbound_july += $raw_stats->calls_inbound_july;
            $calls_inbound_august += $raw_stats->calls_inbound_august;
            $calls_inbound_september += $raw_stats->calls_inbound_september;
            $calls_inbound_october += $raw_stats->calls_inbound_october;
            $calls_inbound_november += $raw_stats->calls_inbound_november;
            $calls_inbound_december += $raw_stats->calls_inbound_december;
            $calls_inbound_january += $raw_stats->calls_inbound_january;
            $calls_inbound_february += $raw_stats->calls_inbound_february;
            $calls_inbound_march += $raw_stats->calls_inbound_march;
            $calls_inbound_april += $raw_stats->calls_inbound_april;
            $calls_inbound_may += $raw_stats->calls_inbound_may;
            $calls_inbound_june += $raw_stats->calls_inbound_june;
            $calls_outbound_july += $raw_stats->calls_outbound_july;
            $calls_outbound_august += $raw_stats->calls_outbound_august;
            $calls_outbound_september += $raw_stats->calls_outbound_september;
            $calls_outbound_october += $raw_stats->calls_outbound_october;
            $calls_outbound_november += $raw_stats->calls_outbound_november;
            $calls_outbound_december += $raw_stats->calls_outbound_december;
            $calls_outbound_january += $raw_stats->calls_outbound_january;
            $calls_outbound_february += $raw_stats->calls_outbound_february;
            $calls_outbound_march += $raw_stats->calls_outbound_march;
            $calls_outbound_april += $raw_stats->calls_outbound_april;
            $calls_outbound_may += $raw_stats->calls_outbound_may;
            $calls_outbound_june += $raw_stats->calls_outbound_june;
            $calls_january_total += $calls_inbound_january + $calls_outbound_january;
            $calls_february_total += $calls_inbound_february + $calls_outbound_february;
            $calls_march_total += $calls_inbound_march + $calls_outbound_march;
            $calls_april_total += $calls_inbound_april + $calls_outbound_april;
            $calls_may_total += $calls_inbound_may + $calls_outbound_may;
            $calls_june_total += $calls_inbound_june + $calls_outbound_june;
            $calls_july_total += $calls_inbound_july + $calls_outbound_july;
            $calls_august_total += $calls_inbound_august + $calls_outbound_august;
            $calls_september_total += $calls_inbound_september + $calls_outbound_september;
            $calls_october_total += $calls_inbound_october + $calls_outbound_october;
            $calls_november_total += $calls_inbound_november + $calls_outbound_november;
            $calls_december_total += $calls_inbound_december + $calls_outbound_december;
            $output_july += $raw_stats->output_july;
            $output_august += $raw_stats->output_august;
            $output_september += $raw_stats->output_september;
            $output_october += $raw_stats->output_october;
            $output_november += $raw_stats->output_november;
            $output_december += $raw_stats->output_december;
            $output_january += $raw_stats->output_january;
            $output_february += $raw_stats->output_february;
            $output_march += $raw_stats->output_march;
            $output_april += $raw_stats->output_april;
            $output_may += $raw_stats->output_may;
            $output_june += $raw_stats->output_june;
            $quality_july += $raw_stats->quality_july;
            $quality_august += $raw_stats->quality_august;
            $quality_september += $raw_stats->quality_september;
            $quality_october += $raw_stats->quality_october;
            $quality_november += $raw_stats->quality_november;
            $quality_december += $raw_stats->quality_december;
            $quality_january += $raw_stats->quality_january;
            $quality_february += $raw_stats->quality_february;
            $quality_march += $raw_stats->quality_march;
            $quality_april += $raw_stats->quality_april;
            $quality_may += $raw_stats->quality_may;
            $quality_june += $raw_stats->quality_june;
        }
        $eveningcrewtwoteamstats = new TeamStats;
        //save all entries
        $eveningcrewtwoteamstats->save();
        $bar->advance();

        //Reset stats
        $emails_july = null;
        $emails_august = null;
        $emails_september = null;
        $emails_october = null;
        $emails_november = null;
        $emails_december = null;
        $emails_january = null;
        $emails_february = null;
        $emails_march = null;
        $emails_april = null;
        $emails_may = null;
        $emails_june = null;
        $calls_inbound_july = null;
        $calls_inbound_august = null;
        $calls_inbound_september = null;
        $calls_inbound_october = null;
        $calls_inbound_november = null;
        $calls_inbound_december = null;
        $calls_inbound_january = null;
        $calls_inbound_february = null;
        $calls_inbound_march = null;
        $calls_inbound_april = null;
        $calls_inbound_may = null;
        $calls_inbound_june = null;
        $calls_outbound_july = null;
        $calls_outbound_august = null;
        $calls_outbound_september = null;
        $calls_outbound_october = null;
        $calls_outbound_november = null;
        $calls_outbound_december = null;
        $calls_outbound_january = null;
        $calls_outbound_february = null;
        $calls_outbound_march = null;
        $calls_outbound_april = null;
        $calls_outbound_may = null;
        $calls_outbound_june = null;
        $calls_january_total = null;
        $calls_february_total = null;
        $calls_march_total = null;
        $calls_april_total = null;
        $calls_may_total = null;
        $calls_june_total = null;
        $calls_july_total = null;
        $calls_august_total = null;
        $calls_september_total = null;
        $calls_october_total = null;
        $calls_november_total = null;
        $calls_december_total = null;
        $output_july = null;
        $output_august = null;
        $output_september = null;
        $output_october = null;
        $output_november = null;
        $output_december = null;
        $output_january = null;
        $output_february = null;
        $output_march = null;
        $output_april = null;
        $output_may = null;
        $output_june = null;
        $quality_july = null;
        $quality_august = null;
        $quality_september = null;
        $quality_october = null;
        $quality_november = null;
        $quality_december = null;
        $quality_january = null;
        $quality_february = null;
        $quality_march = null;
        $quality_april = null;
        $quality_may = null;
        $quality_june = null;

        //Nightwalkers
        $nightwalkerrawstats = RawStats::where('role_id', '=', 4)->get();
        foreach ($nightwalkerrawstats as $rawstats)
        {
            $emails_july += $raw_stats->emails_july;
            $emails_august += $raw_stats->emails_august;
            $emails_september += $raw_stats->emails_september;
            $emails_october += $raw_stats->emails_october;
            $emails_november += $raw_stats->emails_november;
            $emails_december += $raw_stats->emails_december;
            $emails_january += $raw_stats->emails_january;
            $emails_february += $raw_stats->emails_february;
            $emails_march += $raw_stats->emails_march;
            $emails_april += $raw_stats->emails_april;
            $emails_may += $raw_stats->emails_may;
            $emails_june += $raw_stats->emails_june;
            $calls_inbound_july += $raw_stats->calls_inbound_july;
            $calls_inbound_august += $raw_stats->calls_inbound_august;
            $calls_inbound_september += $raw_stats->calls_inbound_september;
            $calls_inbound_october += $raw_stats->calls_inbound_october;
            $calls_inbound_november += $raw_stats->calls_inbound_november;
            $calls_inbound_december += $raw_stats->calls_inbound_december;
            $calls_inbound_january += $raw_stats->calls_inbound_january;
            $calls_inbound_february += $raw_stats->calls_inbound_february;
            $calls_inbound_march += $raw_stats->calls_inbound_march;
            $calls_inbound_april += $raw_stats->calls_inbound_april;
            $calls_inbound_may += $raw_stats->calls_inbound_may;
            $calls_inbound_june += $raw_stats->calls_inbound_june;
            $calls_outbound_july += $raw_stats->calls_outbound_july;
            $calls_outbound_august += $raw_stats->calls_outbound_august;
            $calls_outbound_september += $raw_stats->calls_outbound_september;
            $calls_outbound_october += $raw_stats->calls_outbound_october;
            $calls_outbound_november += $raw_stats->calls_outbound_november;
            $calls_outbound_december += $raw_stats->calls_outbound_december;
            $calls_outbound_january += $raw_stats->calls_outbound_january;
            $calls_outbound_february += $raw_stats->calls_outbound_february;
            $calls_outbound_march += $raw_stats->calls_outbound_march;
            $calls_outbound_april += $raw_stats->calls_outbound_april;
            $calls_outbound_may += $raw_stats->calls_outbound_may;
            $calls_outbound_june += $raw_stats->calls_outbound_june;
            $calls_january_total += $calls_inbound_january + $calls_outbound_january;
            $calls_february_total += $calls_inbound_february + $calls_outbound_february;
            $calls_march_total += $calls_inbound_march + $calls_outbound_march;
            $calls_april_total += $calls_inbound_april + $calls_outbound_april;
            $calls_may_total += $calls_inbound_may + $calls_outbound_may;
            $calls_june_total += $calls_inbound_june + $calls_outbound_june;
            $calls_july_total += $calls_inbound_july + $calls_outbound_july;
            $calls_august_total += $calls_inbound_august + $calls_outbound_august;
            $calls_september_total += $calls_inbound_september + $calls_outbound_september;
            $calls_october_total += $calls_inbound_october + $calls_outbound_october;
            $calls_november_total += $calls_inbound_november + $calls_outbound_november;
            $calls_december_total += $calls_inbound_december + $calls_outbound_december;
            $output_july += $raw_stats->output_july;
            $output_august += $raw_stats->output_august;
            $output_september += $raw_stats->output_september;
            $output_october += $raw_stats->output_october;
            $output_november += $raw_stats->output_november;
            $output_december += $raw_stats->output_december;
            $output_january += $raw_stats->output_january;
            $output_february += $raw_stats->output_february;
            $output_march += $raw_stats->output_march;
            $output_april += $raw_stats->output_april;
            $output_may += $raw_stats->output_may;
            $output_june += $raw_stats->output_june;
            $quality_july += $raw_stats->quality_july;
            $quality_august += $raw_stats->quality_august;
            $quality_september += $raw_stats->quality_september;
            $quality_october += $raw_stats->quality_october;
            $quality_november += $raw_stats->quality_november;
            $quality_december += $raw_stats->quality_december;
            $quality_january += $raw_stats->quality_january;
            $quality_february += $raw_stats->quality_february;
            $quality_march += $raw_stats->quality_march;
            $quality_april += $raw_stats->quality_april;
            $quality_may += $raw_stats->quality_may;
            $quality_june += $raw_stats->quality_june;
        }
        $nightwalkerteamstats = new TeamStats;
        //save all entries
        $nightwalkerteamstats->save();
        $bar->advance();

        $bar->finish();
        $this->info(' Completed!');
    }
}
