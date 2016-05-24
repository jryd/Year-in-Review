<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(RawStatsSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(CumulativeStatsSeeder::class);
    }
}
