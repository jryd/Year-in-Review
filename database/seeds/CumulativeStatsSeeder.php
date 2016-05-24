<?php

use Illuminate\Database\Seeder;

class CumulativeStatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\CumulativeStats::create([
            'emails' => 100000,
            'calls' => 25000,
            'development' => 2500,
            'extra_tasks' => 4160,
            'cs_email_average' => 87.41,
            'email_per_person_average' => 2500,
            'call_per_person_average' => 750,
        ]);
    }
}
