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
        ]);
    }
}
