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
            'emails' => 521970,
            'calls' => 69549,
            'development' => 693.65,
            'extra_tasks' => 3701,
            'cs_email_average' => 77.31,
            'email_per_person_average' => 11529,
            'call_per_person_average' => 1987,
        ]);
    }
}
