<?php

use Illuminate\Database\Seeder;
use App\RawStats;

class RawStatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RawStats::create([
        	'user_id' => 7,
        	'emails_july' => 598,
        	'emails_august' => 603,
        	'emails_september' => 761,
        	'emails_october' => 870,
        	'emails_november' => 1227,
        	'emails_december' => 860,
        	'emails_january' => 1086,
        	'emails_february' => 1107,
        	'emails_march' => 605,
        	'emails_april' => 800,
        	'emails_may' => 600,
        	'emails_june' => 600,
			'calls_inbound_july' => 270,
        	'calls_inbound_august' => 170,
        	'calls_inbound_september' => 104,
        	'calls_inbound_october' => 99,
        	'calls_inbound_november' => 298,
        	'calls_inbound_december' => 242,
        	'calls_inbound_january' => 323,
        	'calls_inbound_february' => 263,
        	'calls_inbound_march' => 108,
        	'calls_inbound_april' => 154,
        	'calls_inbound_may' => 140,
        	'calls_inbound_june' => 140,
			'calls_outbound_july' => 39,
        	'calls_outbound_august' => 22,
        	'calls_outbound_september' => 27,
        	'calls_outbound_october' => 28,
        	'calls_outbound_november' => 48,
        	'calls_outbound_december' => 43,
        	'calls_outbound_january' => 56,
        	'calls_outbound_february' => 59,
        	'calls_outbound_march' => 22,
        	'calls_outbound_april' => 50,
        	'calls_outbound_may' => 30,
        	'calls_outbound_june' => 30,
        	'output_july' => 9.8,
            'output_august' => 9.4,
            'output_september' => 12.4,
            'output_october' => 13.7,
            'output_november' => 11.4,
            'output_december' => 9.8,
            'output_january' => 15.5,
            'output_february' => 14.7,
            'output_march' => 13.6,
            'output_april' => 13.7,
            'output_may' => 11,
            'output_june' => 11,
            'quality_july' => 88,
            'quality_august' => 93.1,
            'quality_september' => 93.2,
            'quality_october' => 89.7,
            'quality_november' => 89.3,
            'quality_december' => 89.2,
            'quality_january' => 89.1,
            'quality_february' => 93.2,
            'quality_march' => 92.7,
            'quality_april' => 92.7,
            'quality_may' => 92.7,
            'quality_june' => 92.7,
        	]);
    }
}
